@extends('layout.admin_template')

@section('admin_title')

  {{$cat->cat_name}} | Boss Store

@stop

@section('admin_content')

    <div id="page-wrapper" style="margin-bottom: 100px">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('product-by-cat',['cat_id'=>$cat->id])}}"> {{$cat->cat_name}} </a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('product-by-cat',['cat_id'=>$cat->id])}}"><i class="fa fa-shopping-bag"></i> {{$cat->cat_name}} </a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="container-fluid">@if(Session('err')) <div class="alert alert-danger">{{Session('err')}}@endif</div>
                <div class="container-fluid">@if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif</div>
                <div class="col-md-12">
                    <div class="table-responsive">
                    <table class="table table-hover" id="product-cat">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>﻿ကုန္ပစၥည္းအမည္</th>
                            <th>ေစ်းႏႈန္း</th>
                            <th>အေရအတြက္</th>
                            <th>စာရင္းကိုင္</th>
                        </tr>
                        </thead>
                        @foreach($pds as $pd)
                            <tr>
                                <td>{{$pd->id}}</td>
                                <td>{{$pd->p_name}}</td>
                                <td>{{$pd->p_price}} က်ပ္</td>
                                <td>{{$pd->amount}} {{$pd->amount_type}}</td>
                                <td>{{$pd->user->user_name}}</td>

                            </tr>
                        @endforeach
                    </table>
                    </div>

                </div>

                </div>

            </div>
            <a href="{{route('category')}}" class="btn btn-default"><i class="fa fa-backward"></i> ေနာက္သို႕ျပန္သြားရန္</a>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


@stop