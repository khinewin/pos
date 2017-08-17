@extends('layout.admin_template')


@section('admin_title')

    ေရာင္းရန္မွတ္ထားေသာစာရင္း | Boss Store

@stop

@section('admin_content')

    <div id="page-wrapper" style="margin-bottom: 100px">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('cart')}}"> ေရာင္းရန္မွတ္ထားေသာစာရင္း</a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('cart')}}"><i class="fa fa-dashboard"></i> ေရာင္းရန္မွတ္ထားေသာစာရင္း</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="container-fluid">@if(Session('err')) <div class="alert alert-danger">{{Session('err')}}@endif</div>

                    <div class="container-fluid">@if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif</div>
                    <div class="col-md-12">

                       <div class="container-fluid">
                           @if(Session::has('cart'))
                           <table class="table table-hover">
                               <tr>
                                   <th>﻿ကုန္ပစၥည္းအမည္</th>
                                   <th> မူရင္းေစ်းႏႈန္း</th>
                                   <th>အေရအတြက္</th>
                                   <th>ေစ်းႏႈန္း</th>
                               </tr>
                               <tbody id="cart"></tbody>

                           </table>
                               @else
                               <div class="alert alert-danger text-center"><span class="glyphicon glyphicon-alert"></span> ေရာင္းရန္မွတ္ထားေသာစာရင္းမရွိေသးပါ။</div>
                           @endif
                       </div>

                        <div class="btn btn-sm text-danger" id="clearCart"><span class="glyphicon glyphicon-remove-circle"></span> ၀ယ္ဖ်က္မည္</div>

                    </div>

                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


@stop