<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function online(){
        return view('pages.online');
    }

    public function profile(){
        return view('pages.profile');
    }


}
