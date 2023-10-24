<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){

        $consoles = Console::all();
        
        
        return view('welcome',compact ('consoles'));
    }

    public function profile(){

        return view('profile');
    }

    public function console_filter(  Console $console){

        
        return view('console_filter', compact('console'));
    }
}
