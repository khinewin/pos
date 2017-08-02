@extends('layout.admin_template')

@section('admin_title')

    Dashboard | Coffee Lover

    @stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('dashboard')}}"> Dashboard</a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{count($users)}}</div>
                                    <div>Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('user-manager')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-database fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{count($cts)}}</div>
                                    <div>Contents</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('contents')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-table fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{count($cats)}}</div>
                                    <div>Categories</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('categories')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{count($ords)}}</div>
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
            <!-- /.row -->
            <div class="row">
                <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Users</div>
                <div class="panel-body">
                    <table class="table table-hover">
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->user_name}}</td>
                                <td>@if($user->active)<i class="fa fa-circle-o text-success"> Online</i>  @else <i class="fa fa-circle-o text-danger"> Offline</i>  @endif</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
          </div>
            <div class="col-md-3">
                <div class="panel panel-green">
                    <div class="panel-heading">Contents</div>
                    <div class="panel-body">
                        <table class="table table-hover">
                        @foreach($cts as $ct)
                            <tr>
                                <td>{{$ct->content_name}}</td>
                                <td>{{$ct->content_price}} Ks</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="panel panel-yellow">
                    <div class="panel-heading">Categories</div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            @foreach($cats as $cat)
                                <tr>
                                    <td>{{$cat->category_name}}</td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="panel panel-red">
                    <div class="panel-heading">Orders</div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Waiter</th>
                            </tr>
                            @foreach($ords as $ord)
                                <tr>
                                    <td>{{$ord->id}}</td>
                                    <td>{{$ord->user->user_name}}</td>
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