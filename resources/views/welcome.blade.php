@extends('layout.template')

@section('title')
    ၀င္ေရာက္ရန္ | Boss Store
@stop

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @if(Session('err'))<div class="alert alert-danger"><i class="fa fa-warning"></i> {{Session('err')}}</div>@endif
                <h1 class="text-center text-primary"><i class="fa fa-database"></i> Boss Store <br><small>၀င္ေရာက္ရန္</small></h1>
                <div class="panel">
                    <div class="panel-body">
                        <form role="form" method="post" action="{{route('login')}}">
                            <div class="form-group @if($errors->has('user_name')) has-error @endif">
                                @if($errors->has('user_name')) <span class="help-block">{{$errors->first('user_name')}}</span> @endif
                                <label for="user_name" class="control-label">အမည္</label>
                                <input type="text" name="user_name" id="user_name" class="form-control" value="{{old('user_name')}}">
                            </div>
                            <div class="form-group @if($errors->has('password')) has-error @endif">
                                @if($errors->has('password')) <span class="help-block">{{$errors->first('password')}}</span>@endif
                                <label for="password" class="control-label">လွ်ိဳ႕၀ွက္နံပတ္</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">၀င္မည္</button>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop