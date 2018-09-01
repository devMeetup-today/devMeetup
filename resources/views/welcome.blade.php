@extends('layouts.app')
@section('content')
    <div>
        <h1>devMeetup</h1>

        <div>
            <h3>TO DO:</h3>
            <ul>
                 @foreach ($todo_list as $item)
                    <li>
                        {{$item }}
                    </li>
                 @endforeach
            </ul>
        </div>
    </div>
@endsection
