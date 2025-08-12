<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function create(){
        echo view("users.create");
    }

    public function store(request $request){

        // dd ($request);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect()->route('user.create');

    }
}
