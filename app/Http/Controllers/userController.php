<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\User;

class userController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'password' => ['required']
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->save();

        return redirect()->route('login');
    }
    public function update(Request $request){
        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'last_name' => 'required',
            'phone_number'=>'required',
            'address'=>'required',
            'image'=>'nullable'
        ]);
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->phone_number = $request->input('phone_number');
        $user->address = $request->input('address');
        $user->image = $request->input('image');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('images', 'public'); // Store the image in the public/images directory
            $user->image = $imagePath;
        }
        // $user->fill([
        //     'name' => $request->name,
        //     'last_name' => $request->last_name
        // ]);
        $user->save();
        return redirect()->route('admin/profil');
    }
    public function list(){
        $users = User::all();
        return view('admin.users', compact('users'));
    }
}
