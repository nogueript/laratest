<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
	return view('index');
    }

    public function getImLost(){
	return view('imlost');
    }

    public function getContact(){
	return view('contact');
    }

    public function getHaha(){
	return view('haha');
    }
    

    public function getObj(){
	return view('obj');
    }

    public function getAbout(){
	return view('about');
    }

}
