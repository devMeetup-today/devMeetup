@extends('layouts.app')
@section('content')

    <h1>Create a Meetup</h1>
    <div>
        <form method="post" action="{{url('/meetup/create')}}">
             @csrf
            <div class="form-group">
                <label for="title">Name of the Meetup</label>
                <input type="text" id="title" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <label for="date">Date of Meetup</label>
                <input type="date" id="meetup_date" placeholder="Date of Meetup" name="meetup_date">
            </div>
            <div class="form-group">
                <label for="time">Time of Meetup</label>
                <input type="text" id="meetup_time" placeholder="Time of Meetup" name="meetup_time">
            <div class="form-group">
                <label for="country">Country of Meetup</label>
            </div>
            <div>
                <select name="country"> <!-- TO-DO: load these in dynamically -->
                <option value="0">Select a country</option>
                </select>
            </div>
                <div class="form-group">
                    <label for="city">Place of Meetup</label>
                    <input type="text" id="city" placeholder="Place of Meetup" name="meetup_place">
                </div>
            <div class="form-group">
                <label for="additional_info">Description and / or additional information</label><br>
                <textarea id="additional_info" rows="10" cols="30" placeholder="Additional Information" name="details"></textarea>
            </div>
                <button type="submit">Publish Meetup</button>
        </form>
    </div>
@endsection
