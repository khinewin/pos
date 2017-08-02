@extends('layout.admin_template')

@section('admin_title')

    Profile | Coffee Lover

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Profile
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-user-circle-o"></i> Profile
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->


        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-6 col-md-offset-3">
                    <div class="img-circle text-center" id="userProfilePic">
                        <i class="fa fa-user-circle-o fa-5x"></i>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <td><i class="fa fa-user-o"></i> User Name</td>
                            <td>{{$user->user_name}}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-envelope-o"> Email Address</i></td>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-percent"></i> Account Role</td>
                            <td>@if($user->hasRole('Administrator')) Administrator @elseif($user->hasRole('Manager')) Manager @elseif ($user->hasRole('Casher')) Casher @else Waiter @endif</td>
                        </tr>
                        <tr>
                            <td><span class="glyphicon glyphicon-time"></span> Created Date</td>
                            <td>{{date('d-m-Y h:i A', strtotime($user->created_at))}}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-calendar"> Last Login</i></td>
                            <td>{{date('d-m-Y h:i A', strtotime($user->last_login))}}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-address-book"> Login Now</i></td>
                            <td>{{$user->active_ip}}</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-address-book"> Last Login IP</i></td>
                            <td>{{$user->last_login_ip}}</td>
                        </tr>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>


    @stop