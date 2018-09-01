@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Dev Meetup
        </div>
        <div class="links">
            <a href="{{url('about')}}">About</a>
            <a href="{{url('areas')}}">Find a meetup in your area</a>
        </div>
        <div>
            <h3>The following meetups are registered at this point:</h3>
            <ul>
         @foreach ($meetups as $item)
            <li>
                <a href="{{url('meetup')}}/{{$item->id}}">{{$item->title }}</a>
            </li>
             @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
