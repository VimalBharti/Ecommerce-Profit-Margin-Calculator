<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('images/logo1.png')}}" width="42" height="42"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-center">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Services</a>
                        <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li class="nav-item login-button">
                                <a class="nav-link" href="{{route('login')}}">
                                    <span>Login</span>
                                </a>
                            </li>
                        @else
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-item" href="{{route('dashboard')}}">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">Logout</a>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

.header_area {
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 9999;
  /*background: #2c2172;*/
  background: transparent;
}
.header_area .navbar-brand {margin-right: 30px; }
.header_area .menu_nav {width: 100%; }
.header_area .navbar {background: transparent;padding: 0px;border: 0px;border-radius: 0px;width: 100%; }
.header_area .navbar .nav .nav-item {margin-right: 45px; }
.header_area .navbar .nav .nav-item .nav-link {
  font: 500 12px/100px "Roboto", sans-serif;text-transform: uppercase;color: #fff;padding: 0px;display: inline-block; 
}
.header_area .login-button a span{border: 1px solid #efefef;border-radius: 4px; padding: 10px 18px;}
.header_area .navbar .nav .nav-item .nav-link:after {display: none;}
.header_area .navbar .nav .nav-item:hover .nav-link, .header_area .navbar .nav .nav-item.active .nav-link {
  color: #3fcaff; 
}
.header_area .navbar .nav .nav-item.submenu {position: relative; }
.header_area .navbar .nav .nav-item.submenu ul {
  border: none;padding: 0px;border-radius: 0px;box-shadow: none;margin: 0px;background: #fff; 
}
.header_area .navbar .nav .nav-item.submenu ul {
  position: absolute;top: 120%;left: 0px;min-width: 200px;text-align: left;opacity: 0;
  transition: all 300ms ease-in;visibility: hidden;display: block;border: none;padding: 0px;
  border-radius: 0px;box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.4); 
} 