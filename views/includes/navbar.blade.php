
    <nav class="navbar navbar-inverse navbar-fixed-top" >
   
        <div class="container">
    
          <div class="navbar-header">
            
            <a class="navbar-brand" href="#">EVENTS</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            @if(Auth::guard('web')->check())
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Event Booking</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About us</a></li>
            
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
             
            </ul>
            @else

          

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Event Booking</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About us</a></li>
            
            <li>
            <a class="btn btn-default btn-outline btn-circle"   href="{{route('register')}}" aria-expanded="false" aria-controls="nav-collapse2">Sign in</a>
                </li>
                <li>
                <a class="btn btn-default btn-outline btn-circle"   href="{{route('login')}}" aria-expanded="false" aria-controls="nav-collapse2">Login</a>
                </li>
             
            </ul>

            @endif
            
          </div><!--/.navbar-collapse -->
        </div>
      </nav>
     
 