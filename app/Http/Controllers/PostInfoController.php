<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostInfoController extends Controller
{
    public function store(){
        request()->validate([
            'Nombre' => 'required',
            'email' => 'required',
        ]);

        return back()->with('status', 'Mensaje recibido');
    }
}
