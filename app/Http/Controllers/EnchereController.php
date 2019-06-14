<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnchereController extends Controller
{
    public function create(){
        return view('enchere.create');
    }
}
