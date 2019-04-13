<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //

   	public function create()
   	{
   		dd('test');
   		return view('admin.events.create');
   	}
}
