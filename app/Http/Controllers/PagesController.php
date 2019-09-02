<<<<<<< HEAD
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

    public function getChat(){
	return view('chat');
    }

    public function getSend(){
	return view('send');
    }

    public function getObj(){
	return view('obj');
    }

    public function getAbout(){
	return view('about');
    }

}
=======
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
>>>>>>> afd09d1a153875a4bd6e1025cf2b8573eb015ccb
