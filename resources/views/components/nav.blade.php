
<nav class="nav">
    <div class="nav--left">
        <ul class="nav__list">
            <li class="nav__list-item"><a href="{{ url('/') }}"> {{ config('app.name') }}</a></li>
            <li class="nav__list-item"><a href="{{url('about')}}">About</a></li>
            <li class="nav__list-item"><a href="{{url('areas')}}">Find a meetup in your area</a></li>
        </ul>
    </div>

    <ul class="nav__list">
        <li class="nav__list-item"><a href="{{url('login')}}">Log In</a></li>
        <li class="nav__list-item"><a href="{{url('create-account')}}">Create an Account</a></li>
    </ul>
</nav>
