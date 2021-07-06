<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use Illuminate\Http\Request;

class HelloworldController extends Controller
{
    public function ShowGreetings()
    {
        $greetings = Greeting::all();
        return view('showgreetings', ['greetings' => $greetings]);
    }
}
