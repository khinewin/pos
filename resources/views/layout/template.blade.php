<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{URL::to('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{URL::to('bootstrap/css/4-col-portfolio.css')}}" rel="stylesheet">
    <link href="{{URL::to('bootstrap/css/style.css')}}" rel="stylesheet">

    <script src="{{URL::to('bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('bootstrap/js/jQuery.js')}}" type="text/javascript"></script>
    <title>@yield('title')</title>
</head>
<body>

@yield('content')



<script src="{{URL::to('bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>
<script src="{{URL::to('bootstrap/js/jQuery.js')}}" type="text/javascript"></script>
<script src="{{URL::to('bootstrap/js/app.js')}}" type="text/javascript"></script>
</body>
</html>