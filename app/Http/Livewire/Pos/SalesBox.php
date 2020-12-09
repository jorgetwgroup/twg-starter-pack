<?php

namespace App\Http\Livewire\Pos;

use Livewire\Component;

class SalesBox extends Component
{
    public $saleBox;
    public $isSaleBoxOpen = false;
    public $openSaleBoxModal = false;
    public $seller;
    public $opening_amount;
    public $closing_amount;
    public $remarks;

    protected $rules = [
        'opening_amount' => 'required|numeric',
        'remarks' => 'nullable',
    ];

    protected $messages = [
        'required' => 'Este monto es obligatorio',
        'int' => 'El monto debe ser número',
    ];

    public function render()
    {
        return view('livewire.pos.sales-box');
    }

    public function validateSaleBox()
    {
        $this->saleBox = $this->seller->sales_boxes()->latest()->first();

        $this->isSaleBoxOpen = optional($this->saleBox)->is_opened ?? false;

        if (! $this->isSaleBoxOpen) {
            $this->dispatchBrowserEvent('openSaleBoxModal');
        } else {
            $this->emit('salesBoxUpdated', $this->saleBox->id);
        }
    }

    public function openSaleBox()
    {
        $this->validate();
        $this->saleBox = $this->seller->sales_boxes()->create([
            'opening_amount' => $this->opening_amount,
            'remarks' => $this->remarks,
            'opened_at' => now(),
        ]);

        $this->isSaleBoxOpen = true;
        $this->opening_amount = null;
        $this->closing_amount = null;
        $this->remarks = null;
        $this->emit('salesBoxUpdated', $this->saleBox->id);
        $this->dispatchBrowserEvent('closeSaleBoxModal');
    }

    public function closeSaleBox()
    {
        $this->saleBox->closing_amount = $this->closing_amount;
        $this->saleBox->closed_at = now();
        $this->saleBox->save();
        $this->isSaleBoxOpen = false;
        $this->emit('salesBoxUpdated');
        $this->dispatchBrowserEvent('closeSaleBoxModal');
    }
}
