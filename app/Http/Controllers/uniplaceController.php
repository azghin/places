<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;

class uniplaceController extends Controller
{
    public function show($id){
        $data = places::where('id',$id)->first();
        return view('uniplace',compact('data'));
    }
}
