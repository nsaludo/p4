<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementController extends Controller {

    /**
    * Responds to requests to GET /announcements
    */
    public function getIndex() {

        $announcements = \App\Announcement::getAllAnnouncements();

        return view('announcements.index')->with('announcements',$announcements);
    }


    /**
     * Responds to requests to GET /announcements/show/{id}
     */
    public function getShow($id = null) {

        $announcement = \App\Announcement::find($id);

        if(is_null($announcement)) {
            \Session::flash('message','Announcement not found');
            return redirect('/announcements');
        }

        return view('announcements.show',[
            'announcement' => $announcement
        ]);

    }


    /**
     * Responds to requests to GET /announcements/create
     */
    public function getCreate() {

        // if(!\Auth::check()) {
        //     \Session::flash('message','You have to be logged in to create a new announcement.');
        //     return redirect('/');
        // }

        return view('announcements.create');
    }


    /**
     * Responds to requests to POST /announcement/create
     */
    public function postCreate(Request $request) {

        $this->validate($request,[
            'title' => 'required|min:3',
            'details' => 'required|min:4'
        ]);

        # Mass Assignment
        $data = $request->only('title','details');
        $data['user_id'] = \Auth::id();

        # One way to add the data
        #$announcement = new \App\Announcement($data);
        #$announcement->save();

        # An alternative way to add the data
        $announcement = \App\Announcement::create($data);

        # Save Tags
        $announcement->save();

        \Session::flash('message','Your announcement was added');

        return redirect('/announcements');
    }


    /**
	* Responds to requests to GET /announcement/edit/{id?}
	*/
    public function getEdit($id) {

        $announcement = \App\Announcement::find($id);

        if(is_null($announcement)) {
            \Session::flash('message','Announcement not found');
            return redirect('/announcements');
        }

        return view('announcements.edit')
            ->with('announcement',$announcement);

    }


    /**
	* Responds to requests to POST /announcement/edit/{id?}
	*/
    public function postEdit(Request $request) {


        $this->validate($request,[
            'title' => 'required|min:3',
            'details' => 'required|min:4'
        ]);

        $announcement = \App\Announcement::find($request->id);

        $announcement->title = $request->title;
        $announcement->details = $request->details;

        $announcement->save();

        \Session::flash('message','Your changes were saved.');
        return redirect('/announcement/show/'.$request->id);

    }


    /**
	* Responds to requests to GET /announcement/confirm-delete/{id?}
	*/
    public function getConfirmDelete($id) {

        $announcement = \App\Announcement::find($id);

        return view('announcements.delete')->with('announcement', $announcement);

    }

    /**
	* Responds to requests to GET /announcement/delete/{id?}
	*/
    public function getDelete($id) {

        # Get the announcement to be deleted
        $announcement = \App\Announcement::find($id);

        if(is_null($announcement)) {
            \Session::flash('message','Announcement not found.');
            return redirect('/announcements');
        }

        # Then delete the announcement
        $announcement->delete();

        # Done
        \Session::flash('message',$announcement->title.' was deleted.');
        return redirect('/announcements');

    }

} # eoc
