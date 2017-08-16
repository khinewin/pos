<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><i class="fa fa-database"></i> Boss Store</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>


            @if(Auth::User())
                <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> {{Auth::User()->user_name}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user-circle-o"></i> Profile</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                </ul>
                @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('register')}}">Sign Up User</a></li>
                </ul>
                @endif


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>