
@foreach($products as $cart)
    <tr>
        <td>{{$cart['content']['content_name']}}</td>
        <td>{{$cart['content']['content_price']}}</td>
        <td><span class="btn btn-default btn-xs" id="btnDecreaseCart" idd="{{$cart['content']['id']}}"><i class="fa fa-caret-left"></i></span>
            {{$cart['qty']}}
            <span class="btn btn-default btn-xs" id="btnIncreaseCart" idd="{{$cart['content']['id']}}"><i class="fa fa-caret-right"></i></span>
        </td>
        <td>{{$cart['content']['content_price'] * $cart['qty']}}</td>
    </tr>
@endforeach
<tr>
    <td colspan="3">Total Amount</td>
    <td>{{$totalAmount}}</td>
</tr>