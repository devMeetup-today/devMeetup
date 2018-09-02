<?php

namespace App\Http\Controllers;

use App\Meetup;

class MeetupController extends Controller
{
    public function indexAction(){
        return view('welcome');
    }

    public function showMeetupListAction(){
        $meetups = Meetup::all();
        return view('list', compact('meetups'));
    }

    public function showMeetupAction(Meetup $meetup){
        return view('detail.meetup_details', compact('meetup'));
    }
}
