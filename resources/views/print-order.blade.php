@extends('layout.template')

@section('title')
    Print | Coffee Lover
@stop

@section('content')

    <div class="container">
        @foreach($orders as $order)
            <div class="col-md-6 col-md-offset-3">
                <h2 class="text-center"><i class="fa fa-coffee"></i> Coffee Lover</h2>
                <h5 class="text-center"><i class="fa fa-phone-square"></i> 09970488345</h5>
                <p>Customer : {{$order->customer}} <span class="pull-right">Date : {{date('d/m/Y h:i A')}}</span></p>
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Amount</th>
                    </tr>
                @foreach($order->cart->items as $item)
                    <tr>
                        <td>{{$item['content']['content_name']}}</td>
                        <td>{{$item['content']['content_price']}}</td>
                        <td>{{$item['qty']}}</td>
                        <td>{{$item['price']}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <th colspan="3">Total Amount</th>
                        <th>{{$order->cart->totalAmount}}</th>
                    </tr>
                    <tr>
                        <td colspan="3">Gov Tax (5%)</td>
                        <td>{{$order->cart->totalAmount * 5 /100}}</td>
                    </tr>
                    <tr>
                        <td colspan="3">Grand Total Amount</td>
                        <td>{{($order->cart->totalAmount) + ($order->cart->totalAmount * 5 /100)}}</td>
                    </tr>
                </table>

            </div>
            @endforeach
    </div>

    <p class="text-center">Thank You from Coffee Lover</p>

@stop