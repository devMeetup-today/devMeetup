<?php

namespace App\Http\Controllers;

use App\Meetup;
use Illuminate\Http\Request;

class MeetupController extends Controller
{

    public function showMeetupListAction(){
        $meetups = Meetup::all();
        return view('list', compact('meetups'));
    }

    public function showMeetupAction(Meetup $meetup){
        return view('detail.meetup_details', compact('meetup'));
    }

    /**
     * Display the homepage
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Homepage
        return view('welcome');
    }

    /**
     * Show the form for creating a new meetup.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* TO DO:
         * fetch formbuilder? / render form html
         * ssend form to view
         * return view('auth_only.auth_home.blade.php');
        */

        return view('auth_only.create_meetup');
    }

    /**
     * Store a newly created meetup in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* TO DO:
         * create meetup from request data
         * store to DB
         * redirect to home
         * return view('auth_only.auth_home.blade.php');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* TO DO:
         * fetch meetup from DB
         * show the meetup
         * return view('auth_only.singleMeetup.blade.php');
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* TO DO:
         * fetch formbuilder / form html
         * fetch meetup data entity from DB
         * return view(''auth_only.create_meetup', $form, $data);
        */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /* TO DO:
         * fetch updated data from edit()
         * store data from DB
         * return view('auth_only.auth_home.blade.php');
         */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* TO DO:
         * identify meetup by ID
         * check if any data (like people signed up for meetup) is assosciated with the meetup
         * if yes, display a warning and possibly send mails/ notifications to the signed-up users
         * if delete confirmed, delete item from DB (soft delete / hard delete?)
         * and redirect to home
         * return view('auth_only.auth_home.blade.php');
         */
    }
}
