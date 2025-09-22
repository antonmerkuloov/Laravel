<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function second(){
    $name = "Anton";
    $arr=["name"=>"Anton", "mark"=>4, "isAdmin"=> false];
    return view('second', compact('name'));
    }
    public function third(){
        return view('third');
    }
}
