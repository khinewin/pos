@extends('layout.admin_template')

@section('admin_title')

    Categories | Coffee Lover

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('categories')}}"> Categories</a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('categories')}}"><i class="fa fa-table"></i> Categories</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
        @if(Session('info'))<div class="alert alert-success">{{Session('info')}}</div> @endif

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Category List</div>
                            <div class="panel-body">

                                <ul class="list-group">
                                    @foreach($cats as $cat)

                                        <li class="list-group-item">{{$cat->category_name}} <div class="text-danger pull-right" data-toggle="modal" data-target="#{{$cat->id}}"><i class="fa fa-trash"></i></div></li>
                                    @endforeach

                                </ul>
                                <div class="text-center">{{$cats->links()}}</div>
                            @foreach($cats as $cat)
                                    <!-- Small modal -->
                                    <div class="modal fade bs-example-modal-sm" id="{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title text-warning">Confirm Delete Category</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-danger">This process will delete permanently the category name of "<strong>{{$cat->category_name}}</strong>" from your app.</p>
                                                </div>
                                                <form method="post" action="{{route('delete-category')}}">
                                                    <input type="hidden" name="id" id="id" value="{{$cat->id}}">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Calcel</button>
                                                        <button type="submit" class="btn btn-primary">Delete</button>
                                                    </div>
                                                    {{csrf_field()}}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Small modal -->
                                @endforeach


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">New Category</div>
                            <div class="panel-body">
                                <form role="form" method="post" action="{{route('new-category')}}">
                                    <div class="form-group @if($errors->has('category_name')) has-error @endif">
                                        @if($errors->has('category_name')) <span class="help-block">{{$errors->first('category_name')}}</span> @endif
                                        <label for="category_name" class="control-label">Category Name</label>
                                        <input type=text" name="category_name" id="category_name" class="form-control">
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
        </div>
    </div>






@stop