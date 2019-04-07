@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
            <h2>Meetups Overview</h2>
        <div>
            @if (count($meetups) > 0)
                <h3>The following meetups are registered at this point:</h3>
                <ul>
                     @foreach ($meetups as $item)
                        <li>
                            <a href="{{url('meetup')}}/{{$item->id}}">{{$item->title }}</a>
                        </li>
                     @endforeach
                </ul>
            @else
                <div>
                    There are no meetups registered in our database yet :(
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
