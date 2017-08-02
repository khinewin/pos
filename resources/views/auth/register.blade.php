@extends('layout.admin_template')

@section('admin_title')

    Add User | Coffee Lover

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Add User
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-plus-circle"></i> Add User
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-6">
                    @if(Session('info'))<div class="alert alert-success"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>@endif
                    <h1 class="text-center text-primary">Add User</h1>
                    <div class="panel">
                        <div class="panel-body">
                            <form role="form" method="post" action="{{route('register')}}">
                                <div class="form-group @if($errors->has('user_name')) has-error @endif">
                                    @if($errors->has('user_name')) <span class="help-block">{{$errors->first('user_name')}}</span> @endif
                                    <label for="user_name" class="control-label">User Name</label>
                                    <input type="text" name="user_name" id="user_name" class="form-control" value="{{old('user_name')}}">
                                </div>
                                <div class="form-group @if($errors->has('email')) has-error @endif">
                                    @if($errors->has('email')) <span class="help-block">{{$errors->first('email')}}</span> @endif
                                    <label for="email" class="control-label">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                                </div>
                                <div class="form-group @if($errors->has('password')) has-error @endif">
                                    @if($errors->has('password')) <span class="help-block">{{$errors->first('password')}}</span>@endif
                                    <label for="password" class="control-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group @if($errors->has('confirm_password')) has-error @endif">
                                    @if($errors->has('confirm_password')) <span class="help-block">{{$errors->first('confirm_password')}}</span>@endif
                                    <label for="confirm_password" class="control-label">Confirm Password</label>
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Save Change</button>
                                {{csrf_field()}}
                            </form>
                        </div>

            </div>
                        <a href="{{route('user-manager')}}" class="btn btn-default"><i class="fa fa-backward"></i> Back</a>

                </div>


            </div>
        </div>

        @stop