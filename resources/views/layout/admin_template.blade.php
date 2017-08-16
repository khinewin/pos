<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <link href="{{URL::to('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{URL::to('bootstrap/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::to('bootstrap/css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{URL::to('font-awesome/css/plugins/morris.css')}}" rel="stylesheet">
    <link href="{{URL::to('bootstrap/css/bootstrap-toggle.css')}}" rel="stylesheet">
    <link href="{{URL::to('bootstrap/css/date-picker.css')}}" rel="stylesheet">
    <link href="{{URL::to('bootstrap/css/data-table.css')}}" rel="stylesheet">



    <script src="{{URL::to('bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>

    <script src="{{URL::to('bootstrap/js/jQuery.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('bootstrap/js/jquery-ui.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('bootstrap/js/data-table.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('bootstrap/js/plugins/morris/raphael.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('bootstrap/js/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('bootstrap/js/plugins/morris/morris-data.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('bootstrap/js/bootstrap-toggle.js')}}" type="text/javascript"></script>

    <title>@yield('admin_title')</title>
</head>

<body>


<div id="wrapper">

@include('partials.admin_nav')

    @yield('admin_content')

    @include('partials.footer')

</div>
<!-- /#wrapper -->


<script src="{{URL::to('bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>


<script src="{{URL::to('bootstrap/js/jQuery.js')}}" type="text/javascript"></script>
<script src="{{URL::to('bootstrap/js/jquery-ui.js')}}" type="text/javascript"></script>
<script src="{{URL::to('bootstrap/js/data-table.js')}}" type="text/javascript"></script>
<script src="{{URL::to('bootstrap/js/plugins/morris/raphael.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('bootstrap/js/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<script src="{{URL::to('bootstrap/js/plugins/morris/morris-data.js')}}" type="text/javascript"></script>
<script src="{{URL::to('bootstrap/js/bootstrap-toggle.js')}}" type="text/javascript"></script>
<script src="{{URL::to('bootstrap/js/app.js')}}" type="text/javascript"></script>






</body>

</html>