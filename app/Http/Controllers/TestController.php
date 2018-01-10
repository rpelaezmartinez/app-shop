<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function welcome() {
    	//return "2 + 4 = ".(2+4);
    	return view("welcome");
    }
}
