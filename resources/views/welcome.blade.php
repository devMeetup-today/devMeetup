@extends('layouts.app')
@section('content')
    <div>
        <h1>devMeetup</h1>

        <div>
            <h3>TO DO:</h3>
            <p>For a complete list of what needs doing please check the issues list on Github.</p>
            <p>For now, you can check out the following things:</p>
            <ul>
                <li><a href="{{url('meetups')}}">A list of all registered meetups</a></li>
                <li><a href="{{url('login')}}">Check out the Login page</a></li>
                <li><a href="{{url('register')}}">Check out the registering page</a></li>
            </ul>
        </div>
    </div>
@endsection
@section('footer')
    <footer>
        <p>Possible footer content goes here</p>
    </footer>
@endsection
