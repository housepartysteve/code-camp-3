 <nav class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><b>Code Camp</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}"><i class="fa fa-home fa-2x" aria-hidden="true"></i>  Home</a></li>
                <li><a href="{{ url('/lessons') }}"><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i>  Subjects</a></li>
                <li><a href="{{ url('/help') }}"><i class="fa fa-question-circle fa-2x" aria-hidden="true"></i>  Help</a></li>
                <!--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li> -->
            </ul>
                @if (Route::has('login'))
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                            <li><a href="{{ url('/home') }}"><i class="fa fa-user fa-2x" aria-hidden="true"></i>  Profile</a></li>
                            <li><a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
                                Logout
                            </a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <li><a href="{{ url('/login') }}"><i class="fa fa-user fa-2x" aria-hidden="true"></i>  Login</a></li>
                            <li><a href="{{ url('/register') }}"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>  Register</a></li>
                        @endif
                    </ul>
                @endif
        </div><!--/.nav-collapse -->
 </nav>
