

<nav class="navbar navbar-fixed-top	" role="navigation" style="background-color: #0ab1fc">

    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Mohamed hedi Nasr</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="{{ route('home') }}">Products list</a></li>
                <li><a href="{{ route('product.index') }}">Manage products</a></li>
                <li><a href="{{ route('category.index') }}">Manage Categories</a></li>
                <li><a href="{{ route('posts.index') }}">Ajax Crud</a></li>
                @if(!Auth::check())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li>

                    </li>
                @endif


                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}
                            <i class="material-icons">settings</i>


                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>

                            <li class="divider"></li>

                            <li> <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form> </li>

                        </ul>
                    </li>
                @endif


            </ul>
        </div>
    </div>
</nav>