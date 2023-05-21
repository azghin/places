<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;

class homeController extends Controller
{
    public function index(Request $request){

        $data = places::all();
        return view('home',compact('data'));


        // $places = ['tendys','ahram','oslo'];
        
        // return view('home' , compact('places'));
        // return view('welcome',compact('places'));
    }
}
