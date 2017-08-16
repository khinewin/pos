@extends('layout.admin_template')

@section('admin_title')

    မူလစာမ်က္ႏွာ | Boss Store

@stop

@section('admin_content')

    <div id="page-wrapper" style="margin-bottom: 100px">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('dashboard')}}"> မူလစာမ်က္ႏွာ</a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> မူလစာမ်က္ႏွာ</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{count($users)}}</div>
                                    <div>၀န္ထမ္းမ်ား</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('user-manager')}}">
                            <div class="panel-footer">
                                <span class="pull-left">အေသးစိတ္ၾကည့္ရန္</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-bag fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{count($pds)}}</div>
                                    <div>ကုန္ပစၥည္းမ်ား</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('products')}}">
                            <div class="panel-footer">
                                <span class="pull-left">အေသးစိတ္ၾကည့္ရန္</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{count($cats)}}</div>
                                    <div>အမ်ိဴးအစားမ်ား</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('category')}}">
                            <div class="panel-footer">
                                <span class="pull-left">အေသးစိတ္ၾကည့္ရန္</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Orders</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


@stop