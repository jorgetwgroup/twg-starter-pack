<?php

namespace App\Http\Livewire\Pos;

use Livewire\Component;

class SalesBox extends Component
{
    public $saleBox;
    public $isSaleBoxOpen = false;
    public $openSaleBoxModal = false;
    public $seller;
    public $amount;
    public $remarks;

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
        }
    }

    public function openSaleBox()
    {
        $this->saleBox = $this->seller->sales_boxes()->create([
            'open_at' => now(),
        ]);

        $this->isSaleBoxOpen = true;
    }

    public function closeSaleBox()
    {
        $this->isSaleBoxOpen = false;
    }
}
