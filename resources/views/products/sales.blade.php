@extends('layout.admin_template')

@section('admin_title')

   ေရာင္းမည္ | Boss Store

@stop

@section('admin_content')

    <div id="page-wrapper" style="margin-bottom: 100px">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('sales')}}"> ေရာင္းမည္</a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('sales')}}"><i class="fa fa-bookmark"></i> ေရာင္းမည္</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="container-fluid">@if(Session('err')) <div class="alert alert-danger"><i class="fa fa-warning"></i> {{Session('err')}}@endif</div>
                    <div class="container-fluid">@if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif</div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <span id="stockInfo"></span>
                            <table class="table table-hover" id="sales">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>﻿ကုန္ပစၥည္းအမည္</th>
                                    <th>ေစ်းႏႈန္း</th>
                                    <th>က်န္ရွိစာရင္း</th>
                                    <th>ေရာင္းရန္မွတ္ထားမည္</th>

                                </tr>
                                </thead>
                                @foreach($pds as $pd)
                                    <tr>
                                        <td>{{$pd->p_slug}}</td>
                                        <td>{{$pd->p_name}}</td>
                                        <td>{{$pd->p_price}} က်ပ္</td>
                                        <td>{{$pd->amount}} {{$pd->amount_type}}</td>
                                        <td class="text-center"><div class="btn btn-sm btn-primary" id="btnAddToCart" slug={{$pd->p_slug}}><i class="fa fa-plus-circle"></i><i class="fa fa-shopping-cart"></i></div></td>

                                    </tr>
                                @endforeach

                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


@stop