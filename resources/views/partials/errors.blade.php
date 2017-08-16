@extends('layout.admin_template')

@section('admin_title')

    ၀င္ခြင့္တားျမစ္ထားသည္ | Boss Store

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header text-danger">
                        ၀င္ခြင့္တားျဖစ္ထားသည္။
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active text-danger">
                            <i class="fa fa-warning"></i> ၀င္ခြင့္တားျမစ္ထားသည္။
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            @if(Session('info'))<div class="alert alert-success">{{Session('info')}}</div>@endif

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="alert alert-danger text-center">
                        <span class="glyphicon glyphicon-alert"></span> ယခု ၀န္ထမ္းသည္ ၀င္ခြင့္မရွိသျဖင့္ တားျမစ္ထားသည္။
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop