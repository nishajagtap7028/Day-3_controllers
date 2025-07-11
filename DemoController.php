<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    function getUser(){
    $name = "Nisha Jagtap";
    return view('user', compact('name'));
}

}
