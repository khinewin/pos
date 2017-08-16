<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><i class="fa fa-database"></i> Boss Store</a>
    </div>
    <!-- Top Menu Items -->
    <div class="container-fluid">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('sales')}}"><i class="fa fa-shopping-basket"></i> ေရာင္းမည္</a></li>

        <li><a href="{{route('sales-list')}}"><i class="fa fa-bookmark"></i> အေရာင္းစာရင္းမ်ား</a></li>

        <li><a href="{{route('category')}}"><i class="fa fa-list-alt"></i> အမ်ိဴးအစားမ်ား</a></li>
        <li>
            <a href="{{route('products')}}"><i class="fa fa-fw fa-shopping-bag"></i> ﻿ကုန္ပစၥည္းမ်ား</a>
        </li>

        <li>
            <a href="{{route('user-manager')}}"><i class="fa fa-fw fa-users"></i> ၀န္ထမ္းမ်ားစီမံရန္</a>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{Auth::User()->user_name}} <b class="caret"></b></a>
            <ul class="dropdown-menu">

                <li>
                    <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> ထြက္မည္</a>
                </li>
            </ul>
        </li>
    </ul>
        </div>
    </div>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li><a href="{{route('sales')}}"><i class="fa fa-shopping-basket"></i> ေရာင္းမည္</a></li>
            <li><a href="{{route('sales-list')}}"><i class="fa fa-bookmark"></i> အေရာင္းစာရင္းမ်ား</a></li>
            <li>
                <a href="{{route('category')}}"><i class="fa fa-fw fa-list-alt"></i> အမ်ိဴးအစားမ်ား</a>
            </li>
            <li>
                <a href="{{route('products')}}"><i class="fa fa-fw fa-shopping-bag"></i> ﻿ကုန္ပစၥည္းမ်ား</a>
            </li>

            <li>
                <a href="{{route('user-manager')}}"><i class="fa fa-fw fa-users"></i> ၀န္ထမ္းမ်ားစီမံရန္</a>
            </li>


            <li>
                <a href="#"><i class="fa fa-shopping-cart"></i> Orders</a>
            </li>
            <li><a href="#"><i class="fa fa-calendar-check-o"></i> Audit</a></li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>