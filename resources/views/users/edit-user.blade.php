@extends('layout.admin_template')

@section('admin_title')

    Edit User | Coffee Lover

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Edit User
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-edit"></i> Edit User | {{$user->user_name}}
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
                        <div class="panel-heading">Update Account Information</div>
                        <div class="panel-body">
                            <form method="post" action="{{route('update-user')}}" role="form">
                                <input type="hidden" name="id" id="id" value="{{$user->id}}">

                                <div class="form-group @if($errors->has('email')) has-error @endif">
                                    @if($errors->has('email')) <span class="help-block">{{$errors->first('email')}}</span> @endif
                                    <label for="email" class="control-label">Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="account_role" class="control-label">Account Role</label>
                                    <div class="radio">
                                        <label><input type="radio" name="account_role" id="account_role" value="Administrator" disabled @if($user->hasRole('Administrator')) checked @endif>Administrator </label>
                                        <label><input type="radio" name="account_role" id="account_role"  value="Manager" @if($user->hasRole('Administrator')) disabled @endif @if($user->hasRole('Manager')) checked @endif>Manager </label>
                                        <label><input type="radio" name="account_role" id="account_role" value="Casher" @if($user->hasRole('Administrator')) disabled @endif @if($user->hasRole('Casher')) checked @endif>Casher </label>
                                        <label><input type="radio" name="account_role" id="account_role" value="Waiter" @if($user->hasRole('Administrator')) disabled @endif @if($user->hasRole('Waiter')) checked @endif>Waiter </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                </div>
                                {{csrf_field()}}

                            </form>

                        </div>
                    </div>



                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Update Password</div>
                            <div class="panel-body">

                                <form method="post" action="{{route('update-user-password')}}" role="form">
                                    <input type="hidden" name="id" id="id" value="{{$user->id}}">
                                <div class="form-group @if($errors->has('new_password')) has-error @endif">
                                    @if($errors->has('new_password'))<span class="help-block">{{$errors->first('new_password')}}</span>@endif
                                    <label for="new_password" class="control-label">New Password</label>
                                    <input type="password" name="new_password" id="new_password" class="form-control">
                                </div>
                                <div class="form-group @if($errors->has('confirm_new_password')) has-error @endif">
                                    @if($errors->has('confirm_new_password'))<span class="help-block">{{$errors->first('confirm_new_password')}}</span>@endif
                                    <label for="confirm_new_password" class="control-label">Confirm New Password</label>
                                    <input type="password" name="confirm_new_password" id="confirm_new_password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save Change</button>
                                </div>
                                    {{csrf_field()}}
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
            <a href="{{route('user-manager')}}" class="btn btn-default"><i class="fa fa-backward"></i> Back</a>


        </div>
    </div>
@stop