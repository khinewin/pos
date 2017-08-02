@extends('layout.admin_template')

@section('admin_title')

    Audit | Coffee Lover

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('audit')}}">Audit</a>


                        <form class="navbar-form navbar-right">
                            <div class="col-xs-10">
                                <div class="form-group">
                                    <input type="search" name="getDate" id="getDate" class="form-control" placeholder="Search By Date">
                                </div>
                            </div>
                            <button type="button" id="btnGetByDate" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </form>
                    </h1>


                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('audit')}}"><i class="fa fa-calendar"></i> Audit</a>

                        </li>

                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div id="audit">

            </div>

        </div>


    </div>
    <!-- /#page-wrapper -->


@stop