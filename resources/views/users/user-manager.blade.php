@extends('layout.admin_template')

@section('admin_title')

    ၀န္ထမ္းမ်ားစီမံရန္ | Boss Store

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('user-manager')}}">၀န္ထမ္းမ်ားစီမံရန္</a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('user-manager')}}"><i class="fa fa-users"></i> ၀န္ထမ္းမ်ားစီမံရန္</a>
                        </li>
                        <a href="{{route('register')}}" class="pull-right"><span class="glyphicon glyphicon-plus-sign"></span> ၀န္ထမ္းအသစ္ခန္႕အပ္ရန္</a>

                    </ol>
                </div>
            </div>
            <!-- /.row -->
            @if(Session('err'))<div class="alert alert-danger">{{Session('err')}}</div>@endif

            @if(Session('info'))<div class="alert alert-success">{{Session('info')}}</div>@endif

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>အမည္</th>
                                <th>အီးေမးလိပ္စာ</th>
                                <th>ရာထူး</th>
                                <th>စီမံရန္</th>
                                <th>ဖ်က္ရန္</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->user_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>@if($user->hasRole('Manager')) မန္ေနဂ်ာ @elseif($user->hasRole('Stock')) စာရင္းကိုင္ @elseif($user->hasRole('Sales')) အေရာင္းစာေရး @else ရာထူးခန္႕အပ္ရန္က်န္ရွိ @endif</td>

                                    <td><a href="{{route('edit-user',['slug'=>$user->slug])}}"> <i class="fa fa-edit"></i></a></td>
                                    <td class="text-danger"><div data-toggle="modal" data-target="#{{$user->user_name}}"><i class="fa fa-trash"></i></div></td>

                                </tr>

                                <!-- Small modal -->
                                <div class="modal fade bs-example-modal-sm" id="{{$user->user_name}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title text-warning">Confirm Delete User Account</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-danger">This process will delete permanently user account name "<strong>{{$user->user_name}}</strong>" from your app.</p>
                                            </div>
                                            <form method="post" action="#">
                                                <input type="hidden" name="user_name" id="user_name" value="{{$user->user_name}}">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Calcel</button>
                                                <button type="submit" class="btn btn-primary">Delete</button>
                                            </div>
                                                {{csrf_field()}}
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Small modal -->
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    @stop