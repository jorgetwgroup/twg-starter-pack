@php
use App\Models\Commune;
use App\Models\Product;

$addressData = json_decode($order->json_value);


$addressShipping = null;
if(isset($addressData->addressInvoice)){
    $addressShipping = json_decode($addressData->addressShipping);
}


$addressInvoice = null;
if(isset($addressData->addressInvoice)){
    $addressInvoice = json_decode($addressData->addressInvoice);
}

$communeShipping = null;
$communeInvoice = null;

if($addressShipping){
    $communeShipping = Commune::where('id', $addressShipping->address_commune_id)->first();
}

if($addressInvoice){
    $communeInvoice = Commune::where('id', $addressInvoice->address_commune_id)->first();
}



@endphp
{{--
@extends('layouts.print')
@push('styles') --}}
<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }

    table {
        font-size: x-small;
    }

    tfoot tr td {
        font-weight: bold;
        font-size: x-small;
    }

    .gray {
        background-color: lightgray
    }

    .h3-titulo {
        margin-bottom: 2px;
    }

    .p-estrecho {
        line-height: 5px;
    }

    .item-description {
        font-size: 9px;
        color: #746666;
    }

    .direccion-facturacion-titulo {
        margin-botom: 5px;
    }

    .direccion-envio-titulo {
        margin-botom: 5px;
    }

    .notas {
        margin-top: 0px;
        margin-left: 15px;
    }

    .tabla-totales {
        margin-top: 300px;
    }

    .top-td {
        vertical-align: top;
    }

    .bottom-table {
        margin-top: 20px;
    }

    .product-item {
        border-top: 1px solid lightgray;
    }

    .border-table {
        border: 1px solid lightgray;
    }

    .footer-data {
        position: absolute;
        left: 0;
        bottom: -10;
        width: 100%;

        text-align: center;
    }

</style>
{{-- @endpush --}}
{{-- @section('content') --}}


<table width="100%" style="margin-top: 25px;">
    <tr>

        <td width="70%">

            <h3 class="h3-titulo">{{ 'Orden #' . $order->id }}</h3>
        </td>
        <td width="30%">
            <p class="p-estrecho"><strong>Fecha </strong>: {{ $order->created_at->format('d/m/Y H:i:s') }}
            </p>
        </td>
    </tr>

</table>

<table width="100%">
    <tr>
        <td width="50%">
            @if($addressShipping)
            <div class="direccion-facturacion-titulo">
                <p><strong>Dirección de envío</strong></p>
            </div>
            <p>
            <p class="p-estrecho">{{ $order->first_name . ', ' . $order->last_name }}</p>
            <p class="p-estrecho">{{ $addressShipping->address_street . ', ' . $addressShipping->address_number }}</p>
            <p class="p-estrecho">{{ $communeShipping->name }}</p>
            <p class="p-estrecho">Teléfono: {{ $order->cellphone }}</p>
            </p>
            @endif
        </td>
        <td width="50%">
            @if($addressInvoice)
            <div class="direccion-facturacion-titulo">
                <p><strong>Direccion de facturación </strong></p>
            </div>
            <p>
            <p class="p-estrecho">{{ $addressInvoice->first_name . ', ' . $addressInvoice->last_name }}</p>
            <p class="p-estrecho">{{ $addressInvoice->address_street . ', ' . $addressInvoice->address_number }}</p>
            <p class="p-estrecho">@if($communeInvoice) {{ $communeInvoice->name }}@endif</p>
            <p class="p-estrecho">Teléfono: {{ $addressInvoice->cellphone }}</p>
            </p>
            @endif
        </td>
    </tr>

</table>
<h3 class="h3-titulo"> Productos</h3>
<table width="100%">
    @php
    $total = 0 ;
    $subtotal = 0;
    $subtotalshipping = 0;
    @endphp
    @foreach ($order->order_items as $item)
        @php
        $product = Product::where('id',$item->product_id)->first();
        $subtotal += ($product->price * $item->qty);
        $subtotalshipping += ($item->shipping_total  * $item->qty) ;
        $total += ($product->price * $item->qty) + ($item->shipping_total  * $item->qty);
        @endphp
        <tr class="product-item">
            <td width="30%" class="product-item">
                <p><strong>{{ $product->name }}</strong></p>
                <img class="width-5" src="{{ public_path() . '/' . $product->getFirstImagePath() }}" width="15%">
            </td>
            <td width="40%" class="product-item">
                <p><strong>Precio : </strong>{{ currencyFormat($product->price ? $product->price : 0, 'CLP', true) }}
                </p>
                <p><strong>Cantidad : </strong>{{ $item->qty }}</p>
                <p><strong>Costo de envío :</strong>
                    {{ currencyFormat($item->shipping_total ? $item->shipping_total : 0, 'CLP', true) }}</p>
            </td>
            <td width="30%" align="right" class="product-item">
                <p> {{ currencyFormat((($product->price * $item->qty) + ($item->shipping_total  * $item->qty ))? (($product->price * $item->qty) + ($item->shipping_total   * $item->qty) ) : 0, 'CLP', true) }}
                </p>
            </td>
        </tr>
    @endforeach
    <tr>
        <td colspan="3" width="100%" class="product-item" align="right">
            <p><strong>Subtotal</strong> {{ currencyFormat($subtotal ? $subtotal : 0, 'CLP', true) }}</p>
        </td>
    </tr>
    <tr>
        <td colspan="3" width="100%" align="right">
            <p><strong>Costos de envio</strong>
                {{ currencyFormat($subtotalshipping ? $subtotalshipping : 0, 'CLP', true) }}</p>
        </td>
    </tr>
    <tr>
        <td colspan="3" width="100%" align="right">
            <p><strong>Total</strong> {{ currencyFormat($total ? $total : 0, 'CLP', true) }}</p>
        </td>
    </tr>
</table>
<br />
<br />
<br />
<br />
<h3> Datos de pago</h3>
<table width="100%" class="border-table">
    <tr>
        <td width="100%">
            <p><strong> Método de pago seleccionado:</strong> {{ $order->order_payments->first()->method_title }}</p>
        </td>
    </tr>
    <tr>
        <td width="100%">
            <p><strong>Fecha de
                    pago:</strong>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order->order_payments->first()->created_at)->format('d/m/Y H:i:s') }}
            </p>
        </td>
    </tr>
    <tr>
        <td width="100%">
            <p><strong>Importe Total:</strong> {{ currencyFormat($order->total ? $order->total : 0, 'CLP', true) }}</p>
        </td>
    </tr>
</table>
<div class="footer-data">
    contigopyme.cl
</div>