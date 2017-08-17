@if(Session::has('cart'))

@foreach($pds as $pd)
    <tr>
        <td>{{$pd['item']['p_name']}}</td>
        <td>{{$pd['item']['p_price']}} Ks</td>
        <td>
            <button class="btn  btn-xs btn-warning" id="btnReduce" idd="{{$pd['item']['id']}}"><i class="fa fa-minus-circle"></i></button>
            <span class="badge">{{$pd['qty']}}</span>
            <button class="btn btn-xs btn-info" id="btnIncrease" idd="{{$pd['item']['id']}}"><i class="fa fa-plus-circle"></i></button>

        </td>
        <td>{{$pd['price']}} Ks</td>
    </tr>
@endforeach
<tr>
    <td colspan="3">စုစုေပါင္းက်သင့္ေငြ</td>
    <td>{{$totalPrice}} Ks</td>
</tr>

    @endif


