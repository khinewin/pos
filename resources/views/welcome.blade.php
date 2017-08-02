@extends('layout.template')

@section('title')
    Welcome | Coffee Lover
    @stop

@section('content')

    @include('partials.nav_bar')
        <div class="container" id="myContainer">
            <div id="addToCartInfo"></div>
            @include('partials.category_nav')
            @if(Session('err'))<div class="alert alert-warning text-center">{{Session('err')}}</div> @endif
            @if($cts->isEmpty())
                <div class="alert alert-danger text-center">Your search result was not found.</div>
                @else

            <div class="row">
                @foreach($cts as $ct)
                <div class="col-md-3 col-sm-4 portfolio-item">
                    <div class="thumbnail" id="content_cover">
                        <img src="{{route('content_cover',['file_name'=>$ct->content_cover])}}" class="img-rounded" alt="...">
                        <div class="caption clearfix">
                            <h4>{{$ct->content_name}}</h4>
                            <p>{{$ct->content_price}} Ks</p>
                            <p><button type="button" idd="{{$ct->id}}" id="btnAddToCart" class="btn btn-success btn-sm pull-right"  role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button></p>
                        </div>
                    </div>
                </div>
                    @endforeach
                <div class="text-center">{{$cts->links()}}</div>
            </div>
                @endif

        </div>

    @include('partials.footer')

    @stop