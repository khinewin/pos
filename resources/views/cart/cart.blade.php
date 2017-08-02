@extends('layout.template')

@section('title')
    Cart | Coffee Lover
@stop

@section('content')

    @include('partials.nav_bar')
    <div class="container" id="myContainer">
        @if(!$products)
            <div class="row text-center">
                @if(Session('info'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>
                    @else
            <div class="alert alert-danger"><i class="fa fa-warning"></i> Your cart is empty.</div>
                    @endif
            </div>
            <p>

            <form method="get" action="{{route('/')}}">
                <button type="submit" class="btn btn-info"><i class="fa fa-shopping-cart"></i> Continued Shopping</button>
                {{csrf_field()}}
            </form>
            </p>
            @else
           <div class="row">
               <div class="col-md-8">
                   <div class="panel panel-primary">
                       <div class="panel-heading"><i class="fa fa-info-circle"></i> Cart Information</div>
                       <div class="panel-body">
                           <table class="table table-hover">
                               <thead>
                               <tr>
                                   <th>Name</th>
                                   <th>Unit Price</th>
                                   <th>Qty</th>
                                   <th>Amount</th>
                               </tr>
                               </thead>
                               <tbody id="cart">

                               </tbody>
                           </table>
                           <p>

                           <form method="get" action="{{route('/')}}">
                               <button type="submit" class="btn btn-info"><i class="fa fa-shopping-cart"></i> Continued Shopping</button>
                               {{csrf_field()}}
                           </form>

                           <form method="post" class="pull-right" action="{{route('empty-cart')}}">
                               <button type="submit" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Empty Cart</button>
                               {{csrf_field()}}
                           </form>

                           </p>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="panel panel-primary">
                       <div class="panel-heading"><span class="glyphicon glyphicon-check"></span> CheckOut</div>
                       <div class="panel-body">
                           <form method="post" action="{{route('check-out')}}">
                               <div class="form-group">
                               <label for="customer" class="control-label">Customer</label>
                                <select name="customer" id="customer" class="form-control">
                                    <option value="c_1">c_1</option>
                                    <option value="c_2">c_2</option>
                                    <option value="c_3">c_3</option>
                                    <option value="c_4">c_4</option>
                                    <option value="c_5">c_5</option>
                                    <option value="c_6">c_6</option>
                                    <option value="c_7">c_7</option>
                                    <option value="c_8">c_8</option>
                                    <option value="c_9">c_9</option>
                                    <option value="c_10">c_10</option>


                                </select>
                               </div>
                               <div class="form-group">
                               <button type="submit" class="btn btn-primary btn-block">CheckOut</button>
                               </div>
                               {{csrf_field()}}
                           </form>
                       </div>
                   </div>
               </div>
           </div>
        @endif

    </div>

    @include('partials.footer')

@stop