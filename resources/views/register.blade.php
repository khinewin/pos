@extends('layout.template')

@section('title')
    ၀န္ထမ္းအသစ္ခန္႕အပ္ရန္ | Boss Store
@stop

@section('content')

    @include('partials.nav_bar')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @if(Session('info'))<div class="alert alert-success"><span class="glyphicon glyphicon-ok-circle"></span> {{Session('info')}}</div>@endif
            @if(Session('err'))<div class="alert alert-danger"><i class="fa fa-warning"></i> {{Session('err')}}</div>@endif
                <h1 class="text-center text-primary"><i class="fa fa-database"></i> Boss Store <br><small>၀န္ထမ္းအသစ္ခန္႕အပ္ရန္</small></h1>
                <div class="panel">
                    <div class="panel-body">
                        <form role="form" method="post" action="{{route('register')}}">
                            <div class="form-group @if($errors->has('user_name')) has-error @endif">
                                @if($errors->has('user_name')) <span class="help-block">{{$errors->first('user_name')}}</span> @endif
                                <label for="user_name" class="control-label">အမည္</label>
                                <input type="text" name="user_name" id="user_name" class="form-control" value="{{old('user_name')}}">
                            </div>
                            <div class="form-group @if($errors->has('email')) has-error @endif">
                                @if($errors->has('email')) <span class="help-block">{{$errors->first('email')}}</span> @endif
                                <label for="email" class="control-label">အီးေမးလိပ္စာ</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                            </div>
                            <div class="form-group @if($errors->has('password')) has-error @endif">
                                @if($errors->has('password')) <span class="help-block">{{$errors->first('password')}}</span>@endif
                                <label for="password" class="control-label">လွ်ိဳ႕၀ွက္နံပတ္</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group @if($errors->has('confirm_password')) has-error @endif">
                                @if($errors->has('confirm_password')) <span class="help-block">{{$errors->first('confirm_password')}}</span>@endif
                                <label for="confirm_password" class="control-label">လွ်ိဳ႕၀ွက္နံပတ္ ေနာက္တစ္ႀကိမ္ျဖည့္ပါ</label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">ခန္႕အပ္မည္</button>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('partials.footer')
@stop