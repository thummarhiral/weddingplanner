<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return 123;
        //return $categories = Category::all(); 
        $categories = Category::all()->where('status',1);
        return view('admin.categories.lists',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');


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
            'name'=>'required',
            'description'=> 'required'
        ]);

        $category = new Category();
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->status = "1";
        $category->save();
        
        return redirect(url('admin/category'))->with('success', 'Category has been added');
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
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Category)
    {
        //
        $request->validate([
            'name'=>'required',
            'description'=> 'required'
        ]);
        $category = new Category();
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->status = "1";
        $category->save();

        return redirect(url('admin/category'))->with('success', 'Category has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect(url('admin/category'))->with('success', 'Category has been deleted Successfully');
    }
}
