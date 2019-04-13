<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    	$events = array();
    	return view('admin.events.lists', compact('events'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
    	return view('admin.events.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=> 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'contact'=> 'required|integer',
            'price'=>'required|integer',
            'image_upload'=>'required'
        ]);

        $event = new Event();
        $event->name = $request->get('name');
        $event->description = $request->get('description');
        $event->address = $request->get('address');
        $event->city = $request->get('city');
        $event->state = $request->get('state');
        $event->contact = $request->get('contact');
        $event->price= $request->get('price');
        $event->save();
        
        return redirect(url('admin/events'))->with('success', 'Event has been added');
    	
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
    	
    }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$event = Event::find($id);
        return view('admin.eventsa.edit', compact('event'));
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
       $request->validate([
            'name'=>'required',
            'description'=> 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'contact'=> 'required|integer',
            'price'=>'required|integer',
            'image_upload'=>'required'
        ]);

        $event = new Event();
        $event->name = $request->get('name');
        $event->description = $request->get('description');
        $event->address = $request->get('address');
        $event->city = $request->get('city');
        $event->state = $request->get('state');
        $event->contact = $request->get('contact');
        $event->price= $request->get('price');
        $event->save();
        
        return redirect(url('admin/events'))->with('success', 'Event has been added');
        	
    }

    public function destroy($id)
    {
    	$event = Event::find($id);
        $event->delete();

        return redirect(url('admin/events'))->with('success', 'Event has been deleted Successfully');
    }
}
