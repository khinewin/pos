@extends('layout.admin_template')

@section('admin_title')

    ၀န္ထမ္းစီမံရန္ | Boss Store

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        ၀န္ထမ္းစီမံရန္
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-edit"></i>  {{$user->user_name}}
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            @if(Session('info'))<div class="alert alert-success">{{Session('info')}}</div>@endif

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">ကိုယ္ေရး အခ်က္အလက္</div>
                        <div class="panel-body">
                            <form method="post" action="{{route('update-user')}}" role="form">
                                <input type="hidden" name="slug" id="slug" value="{{$user->slug}}">

                                <div class="form-group @if($errors->has('email')) has-error @endif">
                                    @if($errors->has('email')) <span class="help-block">{{$errors->first('email')}}</span> @endif
                                    <label for="email" class="control-label">အီးေမးလိပ္စာ</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="account_role" class="control-label">ရာထူး</label>
                                    <div class="radio">
                                        <label><input type="radio" name="account_role" id="account_role"  value="Manager" @if($user->hasRole('Manager'))  @endif @if($user->hasRole('Manager')) checked @endif>မန္ေနဂ်ာ </label>
                                        <label><input type="radio" name="account_role" id="account_role" value="Stock" @if($user->hasRole('Stock'))  @endif @if($user->hasRole('Stock')) checked @endif>စာရင္းကိုင္ </label>
                                        <label><input type="radio" name="account_role" id="account_role" value="Sales" @if($user->hasRole('Sales'))  @endif @if($user->hasRole('Sales')) checked @endif>အေရာင္းစာေရး </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">မွတ္တမ္းတင္မည္</button>
                                </div>
                                {{csrf_field()}}

                            </form>

                        </div>
                    </div>



                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">လ်ိဴ႕၀ွက္နံပတ္ ေျပာင္းရန္</div>
                            <div class="panel-body">

                                <form method="post" action="{{route('update-password')}}" role="form">
                                    <input type="hidden" name="slug" id="slug" value="{{$user->slug}}">
                                <div class="form-group @if($errors->has('new_password')) has-error @endif">
                                    @if($errors->has('new_password'))<span class="help-block">{{$errors->first('new_password')}}</span>@endif
                                    <label for="new_password" class="control-label">လ်ိဴ႕၀ွက္နံပတ္အသစ္ ျဖည့္ရန္</label>
                                    <input type="password" name="new_password" id="new_password" class="form-control">
                                </div>
                                <div class="form-group @if($errors->has('confirm_new_password')) has-error @endif">
                                    @if($errors->has('confirm_new_password'))<span class="help-block">{{$errors->first('confirm_new_password')}}</span>@endif
                                    <label for="confirm_new_password" class="control-label">လ်ိဴ႕၀ွက္နံပတ္အသစ ္ေနာက္တစ္ႀကိမ္ ျဖည့္ရန္ </label>
                                    <input type="password" name="confirm_new_password" id="confirm_new_password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">မွတ္တမ္းတင္မည္</button>
                                </div>
                                    {{csrf_field()}}
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <a href="{{route('user-manager')}}" class="btn btn-default"><i class="fa fa-backward"></i> ေနာက္သို႕ျပန္သြားရန္</a>


        </div>
    </div>
@stop