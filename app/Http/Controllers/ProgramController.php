<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program1()
    {
        return view('program1', 
        ['title' => 'Program 1']);
    }
    public function program2()
    {
        return view('program2', 
        ['title' => 'Program 3']);
    }
    public function program3()
    {
        return view('program3', 
        ['title' => 'Program 3']);
    }
}
