<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;

class newplaceController extends Controller
{
    public function addForm (){
        return view('/newplace');
    }

    public function addNew (Request $request){
        $data = $request->validate([
            'id'=>'required',
            'title'=>'required',
            'local'=>'required',
            'description'=>'required',
        ]);
        places::create($data);
        return redirect('/newplace')->with('succes','place inserted successfully!!');
    }
}
