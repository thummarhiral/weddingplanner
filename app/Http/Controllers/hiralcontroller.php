<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\hiral;
class hiralController extends Controller
{
    
    public function index()
    {
        $hirals = hiral::paginate(
        );
        $arrhirals = $hirals->toArray();
        //dd($arrUsers);
        return view('hirals.list')->with([
            'hirals'  => $hirals       
        ]);
    }

    //
    public function showhiral($id)
    {
        //select * from  hirals where id = 1
        $hiral = hiral::find($id);
        $displayText = "";
        if(!empty($hiral))
        {
            $displayText = "here";
        }
        else
        {
            $displayText = "Not here!";
        }
        $displayText = !empty($hiral)?"here":"Not here";
        if(!$hiral)
        {
            redirect('/')->withError('hiral not found');
        }

        return view('hirals.info')->with([
            'hiral'  => $hiral->toArray()       
        ]);
    }   
}