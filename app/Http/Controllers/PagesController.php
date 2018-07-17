<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PagesController extends Controller
{   
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    // home
    public function index(){
        return view('pages.home');
    }
    // profile view
    public function profile(){
        return view('pages.profile');
    }
    // profile edit
    public function profileEdit($id){
        // find user
        $profile = User::findOrFail($id);

        // check if user is the owner of the profile
        if(auth()->user()->id !==$profile->id){
            // redirect unauthorized user
            return redirect('/dashboard')->with('error','Unauthorized Access');
        } else {
            // show edit form
            return view('pages.profile-edit')->with('profile',$profile);
        }
    }
    // profile edit proccess
    public function profileUpdate(Request $request, $id){
        // find user
        $profile = USER::findOrFail($id);

        // validate
        $this->validate($request, [
            'name' => 'required'
        ]);

        // check if user is the owner of the profile
        if(auth()->user()->id !==$profile->id){
            // redirect unauthorized user
            return redirect('/dashboard')->with('error','Unauthorized Access');
        } else {
            // update user
            $profile->name = $request->input('name');
            $profile->save();
        }

        // redirect after edit
        return redirect('/profile')->with('success','Successfully updated profile');
    }
    // admin
    public function admin(){
        return view('pages.admin');
    }
}
