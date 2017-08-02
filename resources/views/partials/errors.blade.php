@extends('layout.admin_template')

@section('admin_title')

    Access Denied | Coffee Lover

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-danger">
                        Access Denied
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active text-danger">
                            <i class="fa fa-warning"></i> Access Denied
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            @if(Session('info'))<div class="alert alert-success">{{Session('info')}}</div>@endif

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="alert alert-danger">
                        <span class="glyphicon glyphicon-alert"></span> You don't have permission to access this page.
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop