

@foreach($orders as $ord)

    <div class="panel panel-green">
        <div class="panel-heading clearfix"><h3>Customer : {{$ord->customer}}</h3> <span class="pull-right">Waiter: {{$ord->user->user_name}} | {{date('d/m/Y h:i A', strtotime($ord->created_at))}}</span></div>
            <div class="panel-body">
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Qty</td>
                            <td>Amount</td>
                        </tr>
                        @foreach($ord->cart->items as $item)
                            <tr>
                                <td>{{$item['content']['content_name']}}</td>
                                <td>{{$item['content']['content_price']}}</td>
                                <td>{{$item['qty']}}</td>
                                <td>{{$item['qty'] * $item['content']['content_price']}}</td>
                            </tr>
                            @endforeach
                        <tr>
                            <td colspan="3">Total Amount</td>
                            <td>{{$ord->cart->totalAmount}}</td>
                        </tr>
                    </table>
                </div>
            </div>

        <div class="panel-footer">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-12 text-center">
                        <label class="control-label text-info">Deliver Status</label>
                    </div>
                    <div class="col-md-12 text-center">
                        @if($ord->deliver_status)
                            <span class="glyphicon glyphicon-ok-circle text-success" id="deliver-status" idd="{{$ord->id}}" style="cursor: pointer"> Yes</span>
                        @else
                            <span class="glyphicon glyphicon-alert text-danger" id="deliver-status" idd="{{$ord->id}}" style="cursor: pointer"> No</span>
                        @endif
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="col-md-12 text-center">
                        <label class="control-label text-info">Cash Status</label>
                    </div>
                    <div class="col-md-12 text-center">
                        @if($ord->cash_status)
                            <span class="glyphicon glyphicon-ok-circle text-success" id="cash-status" idd="{{$ord->id}}" style="cursor: pointer"> Yes</span>
                        @else
                            <span class="glyphicon glyphicon-alert text-danger" id="cash-status" idd="{{$ord->id}}" style="cursor: pointer"> No</span>
                        @endif
                    </div>


                </div>
                <div class="col-md-4">
                    <a href="{{route('print-order', ['order_id'=>$ord->id])}}" target="_blank" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span></a>
                </div>
            </div>
        </div>
    </div>

    @endforeach


