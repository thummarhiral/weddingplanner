<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('user_type',0)->get();
        return view('admin.users.lists',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // echo "<pre>";
        // print_r($request->all());
        // echo "</pre>";
        // die;
        $request->validate([
            'first_name'=>'required',
            'last_name'=> 'required',
            'address' => 'required',
            'city' => 'required',
            'pincode' =>'required|integer',
            'state' => 'required',
            'email'=> 'required',
            'password'=>'required',
            'gender'=>'required'
        ]);

        $user = new User();
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->gender = $request->get('gender');
        $user->address = $request->get('address');
        $user->city = $request->get('city');
        $user->pincode = $request->get('pincode');
        $user->state = $request->get('state');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->save();
        
        return redirect(url('admin/users'))->with('success', 'User has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
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
        //
        $request->validate([
            'first_name'=>'required',
            'last_name'=> 'required',
            'address' => 'required',
            'city' => 'required',
            'pincode' =>'required|integer',
            'state' => 'required',
            'email'=> 'required',
            'password'=>'required',
            'gender'=>'required'
        ]);
        $user = User::find($id);
        $user->first_name = $request->get('first_name');
        $user->last_name = $request->get('last_name');
        $user->gender = $request->get('gender');
        $user->address = $request->get('address');
        $user->city = $request->get('city');
        $user->pincode = $request->get('pincode');
        $user->state = $request->get('state');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->save();

        return redirect(url('admin/users'))->with('success', 'User has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(url('admin/users'))->with('success', 'User has been deleted Successfully');
    }
}
