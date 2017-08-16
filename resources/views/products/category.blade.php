@extends('layout.admin_template')

@section('admin_title')

    အမ်ိဴးအစားမ်ား | Boss Store

    @stop

@section('admin_content')

    <div id="page-wrapper" style="margin-bottom: 100px">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('category')}}"> အမ်ိဴးအစားမ်ား</a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('category')}}"><i class="fa fa-dashboard"></i> အမ်ိဴးအစားမ်ား</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="container-fluid">@if(Session('err')) <div class="alert alert-danger">{{Session('err')}}@endif</div>

                <div class="container-fluid">@if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif</div>
                        <div class="col-md-8">

                            @foreach($cats as $cat)
                                <div class="col-lg-6 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">

                                                    <div>{{$cat->cat_name}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{route('product-by-cat',['cat_id'=>$cat->id])}}">
                                            <div class="panel-footer">
                                                <span class="pull-left">အေသးစိတ္ၾကည့္ရန္</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading"><i class="fa fa-plus-circle"></i> အသစ္ထည့္ရန္</div>
                                <div class="panel-body">
                                    <form method="post" action="{{route('new-category')}}">
                                        <div class="form-group @if($errors->has('cat_name')) has-error @endif">
                                            @if($errors->has('cat_name'))<span class="help-block">{{$errors->first('cat_name')}}</span> @endif
                                            <input type="text" name="cat_name" id="cat_name" class="form-control" placeholder="အမ်ိဴးအစားအမည္">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">ထည့္သြင္းမည္</button>
                                        </div>
                                        {{csrf_field()}}
                                    </form>
                                </div>
                            </div>
                        </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


@stop