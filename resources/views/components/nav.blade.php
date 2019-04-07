
<nav class="nav">
    <div class="nav--left">
        <ul class="nav__list">
            <li class="nav__list-item"><a href="{{ url('/') }}"> {{ config('app.name') }}</a></li>
            <li class="nav__list-item"><a href="{{url('about')}}">About</a></li>
            <li class="nav__list-item"><a href="{{url('areas')}}">Find a meetup in your area</a></li>
        </ul>
    </div>
    @if (Auth::check())
        <div class="nav__list-item">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" class="nav__list" action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
            </form>
        </div>
    @else
        <ul class="nav__list">
            <li class="nav__list-item"><a href="{{url('login')}}">Log In</a></li>
            <li class="nav__list-item"><a href="{{url('register')}}">Create an Account</a></li>
        </ul>
    @endif
</nav>
