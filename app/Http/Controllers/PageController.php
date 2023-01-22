<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
         return view('comic.index');
        // return view('welcome');
    }
}
