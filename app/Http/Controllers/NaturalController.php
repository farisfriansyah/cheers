<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NaturalController extends Controller
{
    public function index()
    {   
        return view('cheers-natural');
    }
}
