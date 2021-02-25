<?php

namespace App\Exports\Inventory;

use App\Models\Product;
use App\Models\ProductInventorySource;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class MassReceptionsTemplateExport implements FromArray, WithMapping , WithHeadings, WithColumnWidths, ShouldAutoSize
{
    protected $productInventorySources;
    protected $products;
    private $options;

    public function __construct($companyId, array $options = [])
    {
        $this->setOptions($options);

        $this->productInventorySources = ProductInventorySource::where('company_id', $companyId)->get();
        $this->products = $this->options['includeProducts'] 
        ? Product::select('sku', 'name', 'id')
                ->with('inventories')
                ->where('company_id', $companyId)
                ->where('use_inventory_control', true)
                ->whereDoesntHave('children')->get() 
            : null;
    }

    public function array() : array
    {
        if ($this->products) {
            return $this->products->toArray();
        }

        return [];
    }

    /**
     * Row head in document
     */
    public function headings(): array
    {

        $stock = [
            'Tipo de operación',
            $this->options['replaceStock'] ? '[reemplazar]' : '[sumar]',
        ];

        $documentNumber = [
            'Numero de documento',
            (string) $this->options['documentNumber'],
        ];

        $helpHeading = [
            ' ',
            ' ',
            ' ',
            ' ',
            ' ',
        ];

        $principalHeading = [
            'SKU',
            'Nombre',
        ];

        foreach($this->productInventorySources as $inventory) {
            $principalHeading[] = "$inventory->name [$inventory->code]";
        }

        return [
            $stock,
            $documentNumber,
            $helpHeading,
            $principalHeading,
        ];
    }

    public function map($product): array
    {

        $row = [
            $product['sku'],
            $product['name'],
        ];

        // Include inventory qty if replaceStock is true
        if ($this->options['replaceStock']) {
            $inventories = collect($product['inventories']);
            
            foreach ($this->productInventorySources as $inventory) {
                $temp = $inventories->where('code', $inventory->code)->first();

                if ($temp) {
                    $row[] = $temp['pivot']['qty'];
                }
            }
        }
        
        return $row;
    }

    public function columnWidths(): array
    {
        return [
            'A' => 29,
            'B' => 40,   
        ];
    }

    protected function setOptions($options)
    {
        $this->options = [
            'includeProducts' => $options['includeProducts'] ?? false,
            'replaceStock' => $options['replaceStock'] ?? false,
            'documentNumber' => $options['documentNumber'] ?? ' ',
        ];
    }
}
