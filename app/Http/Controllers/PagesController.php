<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{   
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    // public function __construct(){
    //     $this->middleware('admin', ['admin']);
    // }
    public function index(){
        return view('pages.home');
    }

    public function admin(){
        return view('pages.admin');
    }
}
