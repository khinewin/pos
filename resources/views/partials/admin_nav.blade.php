<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><i class="fa fa-coffee"></i> Coffee Lover</a>
    </div>
    <!-- Top Menu Items -->
    <div class="container-fluid">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav navbar-right">

        <li><a href="{{route('dashboard')}}"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{Auth::User()->user_name}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('profile')}}"><i class="fa fa-fw fa-user-circle-o"></i> Profile</a>
                </li>

                <li class="divider"></li>
                <li>
                    <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
        </div>
    </div>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="{{route('dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li>
                <a href="{{route('user-manager')}}"><i class="fa fa-fw fa-users"></i> User Manager</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-database"></i> Content Manager <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="{{route('contents')}}"><i class="fa fa-dashcube"></i> Contents</a>
                    </li>
                    <li>
                        <a href="{{route('categories')}}"><i class="fa fa-table"></i> Categories</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('orders')}}"><i class="fa fa-shopping-cart"></i> Orders</a>
            </li>
            <li><a href="{{route('audit')}}"><i class="fa fa-calendar-check-o"></i> Audit</a></li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>