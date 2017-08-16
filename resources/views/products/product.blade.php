@extends('layout.admin_template')

@section('admin_title')

    ကုန္ပစၥည္းမ်ား | Boss Store

@stop

@section('admin_content')

    <div id="page-wrapper" style="margin-bottom: 100px">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('products')}}"> ကုန္ပစၥည္းမ်ား</a>

                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('products')}}"><i class="fa fa-dashboard"></i> ကုန္ပစၥည္းမ်ား</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="container-fluid">@if(Session('err')) <div class="alert alert-danger">{{Session('err')}}@endif</div>

                <div class="container-fluid">@if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif</div>
                <div class="col-md-8">
                    <div class="table-responsive">
                <table class="table table-hover" id="products">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>﻿ကုန္ပစၥည္းအမည္</th>
                        <th>ေစ်းႏႈန္း</th>
                        <th>အေရအတြက္</th>
                        <th>စာရင္ကိုင္</th>
                    </tr>
                    </thead>
                    @foreach($pds as $pd)
                        <tr>
                            <td>{{$pd->id}}</td>
                            <td>{{$pd->p_name}}</td>
                            <td>{{$pd->p_price}} က်ပ္</td>
                            <td>{{$pd->amount}} {{$pd->amount_type}}</td>
                            <td>{{$pd->user->user_name}}</td>

                        </tr>
                        @endforeach
                </table>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><i class="fa fa-plus-circle"></i> အသစ္ထည့္ရန္</div>
                        <div class="panel-body">
                            <form method="post" action="{{route('new-product')}}">
                                <div class="form-group @if($errors->has('p_name')) has-error @endif">
                                    @if($errors->has('p_name'))<span class="help-block">{{$errors->first('p_name')}}</span> @endif
                                    <input type="text" name="p_name" id="p_name" class="form-control" placeholder="﻿ကုန္ပစၥည္းအမည္" value="{{old('p_name')}}">
                                </div>
                                <div class="form-group @if($errors->has('p_price')) has-error @endif">
                                    @if($errors->has('p_price'))<span class="help-block">{{$errors->first('p_price')}}</span> @endif
                                    <input type="text" name="p_price" id="p_price" class="form-control" placeholder="ေစ်းႏႈန္း (အဂၤလိပ္လိုေရးရန္)" value="{{old('p_price')}}">
                                </div>
                                <div class="form-group @if($errors->has('cat_id')) has-error @endif">
                                    @if($errors->has('cat_id'))<span class="help-block">{{$errors->first('cat_id')}}</span> @endif
                                   <select name="cat_id" id="cat_id" class="form-control">
                                       <option value="">အမ်ိဴးအစားမ်ား ေရြးရန္</option>
                                       @foreach($cats as $cat)
                                           <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                           @endforeach
                                   </select>
                                </div>

                                <div class="form-group @if($errors->has('amount')) has-error @endif">
                                    @if($errors->has('amount'))<span class="help-block">{{$errors->first('amount')}}</span> @endif
                                    <div class="row">
                                   <div class="col-md-8">
                                    <input type="text" class="form-control" name="amount" id="amount" placeholder="အေရအတြက္ (အဂၤလိပ္လိုေရးရန္)" value="{{old('amount')}}">
                                   </div>
                                    <div class="col-md-4">
                                        <select class="form-control" name="amount_type" id="amount_type">
                                            <option>ခု</option>
                                            <option>ေကာင္</option>
                                            <option>က်ပ္သား</option>
                                            <option>ဖာ</option>
                                            <option>ဘူး</option>
                                            <option>ပါကင္</option>
                                            <option>ထည္</option>
                                            <option>ထုတ္</option>


                                        </select>
                                    </div>

                                </div>
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

