@extends('layout.admin_template')

@section('admin_title')

    အမ်ိဴးအစားမ်ား | Boss Store

    @stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('dashboard')}}"> အမ်ိဴးအစားမ်ား</a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> အမ်ိဴးအစားမ်ား</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">


            </div>

            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


@stop