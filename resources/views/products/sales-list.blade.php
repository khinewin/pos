@extends('layout.admin_template')

@section('admin_title')

   အေရာင္းစာရင္း | Boss Store

@stop

@section('admin_content')

    <div id="page-wrapper" style="margin-bottom: 100px">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('sales-list')}}"> အေရာင္းစာရင္း</a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('sales-list')}}"><i class="fa fa-bookmark"></i> အေရာင္းစာရင္း</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="container-fluid">@if(Session('err')) <div class="alert alert-danger">{{Session('err')}}@endif</div>
                    <div class="container-fluid">@if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif</div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover" id="sales-list">
                                <thead>
                                <tr>
                                    <th>Invoice ID</th>
                                    <th>၀ယ္သူအမည္</th>
                                    <th>ေရာင္းသူအမည္</th>
                                    <th>က်သင့္ေငြ</th>
                                    <th>ေပးေငြ</th>
                                    <th>လက္က်န္ေငြ</th>
                                    <th>ရက္စြဲ</th>
                                    <th>အေသးစိတ္ၾကည့္ရန္</th>
                                    <th>Print</th>
                                </tr>
                                </thead>
                                @foreach($sls as $sl)
                                    <tr>
                                        <td>{{$sl->id}}</td>
                                        <td>{{$sl->customer_name}}</td>
                                        <td>{{$sl->user->user_name}}</td>
                                        <td>{{$sl->totalAmount}} Ks</td>
                                        <td>{{$sl->payment}} Ks</td>
                                        <td>{{$sl->credit}} Ks</td>
                                        <td>{{date('d/m/Y h:i A', strtotime($sl->created_at))}}</td>
                                        <td><div class="text-info text-center" data-toggle="modal" data-target="#{{$sl->id}}"><i class="fa fa-eye-slash"></i></div></td>
                                        <td><div class="text-success text-center"><i class="fa fa-print"></i></div></td>
                                    </tr>

                                    @endforeach
                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->


@stop