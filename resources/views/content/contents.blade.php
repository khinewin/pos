@extends('layout.admin_template')

@section('admin_title')

    Contents | Coffee Lover

@stop

@section('admin_content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <a href="{{route('contents')}}"> Contents</a>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="{{route('contents')}}"> <i class="fa fa-database"></i> Contents</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            @if(Session('info'))<div class="alert alert-success">{{Session('info')}}</div> @endif

            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">Content List</div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        @foreach($cts as $ct)
                                            <tr>
                                                <td>{{$ct->content_name}}</td>
                                                <td>{{$ct->content_price}}</td>
                                                <td>{{$ct->category->category_name}}</td>
                                                <td><div class="text-info" data-toggle="modal" data-target="#E{{$ct->id}}"><span class="glyphicon glyphicon-edit"></span></div></td>
                                                <td><div data-toggle="modal" data-target="#{{$ct->id}}" class="text-danger"><span class="glyphicon glyphicon-trash"></span></div></td>
                                            </tr>
                                            @endforeach
                                    </table>
                                    <div class="text-center">{{$cts->links()}}</div>
                                </div>

                                @foreach($cts as $ct)
                                    <!-- Delete Content -->
                                    <div class="modal fade bs-example-modal-sm" id="{{$ct->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title text-warning">Confirm Delete Content</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-danger">This process will delete permanently the content name of "<strong>{{$ct->content_name}}</strong>" from your app.</p>
                                                </div>
                                                <form method="post" action="{{route('delete-content')}}">
                                                    <input type="hidden" name="id" id="id" value="{{$ct->id}}">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Calcel</button>
                                                        <button type="submit" class="btn btn-primary">Delete</button>
                                                    </div>
                                                    {{csrf_field()}}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Delete Content -->
                                    @endforeach

                                @foreach($cts as $ct)
                            <!-- Edit Content Modal -->
                                <div class="modal fade" id="E{{$ct->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Update Content Information <span class="badge">{{$ct->content_name}}</span></h4>
                                            </div>
                                            <form method="post" action="{{route('update-content')}}" enctype="multipart/form-data">
                                                <input type="hidden" name="id" id="id" value="{{$ct->id}}">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="content_cover" class="control-label">Content Cover</label>
                                                    <input type="file" name="content_cover" id="content_cover" class="form-control" style="height: auto">
                                                </div>
                                                <div class="form-group">
                                                    <label for="content_name" class="control-label">Content Name</label>
                                                    <input type="text" name="content_name" id="content_name" class="form-control" value="{{$ct->content_name}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="content_price" class="control-label">Content Price</label>
                                                    <input type="number" class="form-control" name="content_price" id="content_price" value="{{$ct->content_price}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="category" class="control-label">Category</label>
                                                    <div class="radio">
                                                        @foreach($cats as $cat)
                                                        <label><input type="radio" name="category" id="category" value="{{$cat->id}}" @if($cat->id == $ct->category_id) checked @endif> {{$cat->category_name}} </label>
                                                            @endforeach
                                                       </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                                {{csrf_field()}}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">New Content</div>
                            <div class="panel-body">
                                <form method="post" action="{{route('new-content')}}" enctype="multipart/form-data">
                                    <div class="form-group @if($errors->has('content_cover')) has-error @endif">
                                        @if($errors->has('content_cover'))<span class="help-block">{{$errors->first('content_cover')}}</span> @endif
                                        <label for="content_cover" class="control-label">Content Cover</label>
                                        <input type="file" name="content_cover" id="content_cover" class="form-control" style="height: auto;">
                                    </div>
                                    <div class="form-group @if($errors->has('content_name')) has-error @endif">
                                        @if($errors->has('content_name'))<span class="help-block">{{$errors->first('content_name')}}</span> @endif
                                        <label for="content_name" class="control-label">Content Name</label>
                                        <input type="text" name="content_name" id="content_name" class="form-control" value="{{old('content_name')}}">
                                    </div>
                                    <div class="form-group @if($errors->has('content_price')) has-error @endif">
                                        @if($errors->has('content_price'))<span class="help-block">{{$errors->first('content_price')}}</span> @endif
                                        <label for="content_price" class="control-label">Content Price</label>
                                        <input type="number" name="content_price" id="content_price" class="form-control" value="{{old('content_price')}}">
                                    </div>
                                    <div class="form-group @if($errors->has('category')) has-error @endif">
                                        @if($errors->has('category'))<span class="help-block">{{$errors->first('category')}}</span> @endif
                                        <label for="category" class="control-label">Categories</label>
                                            <div class="radio">
                                                @foreach($cats as $cat)
                                                    <label><input type="radio" name="category" id="category" value="{{$cat->id}}"> {{$cat->category_name}} </label>
                                                @endforeach
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
                </div>
            </div>
        </div>
    </div>






@stop