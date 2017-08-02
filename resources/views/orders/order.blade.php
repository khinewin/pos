@extends('layout.admin_template')

@section('admin_title')

    Orders | Coffee Lover

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('orders')}}"> Orders</a>

                        <span class="pull-right" >{{date('(D)d/m/Y')}}</span>
                    </h1>


                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('orders')}}"><i class="fa fa-shopping-cart"></i> Orders</a>

                        </li>

                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div id="order">

            </div>

        </div>


    </div>
    <!-- /#page-wrapper -->


@stop