<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function index($id){

        // $comics = Comic::all();

        // $data = [
        //     'comics' => $comics
        // ];

        // return view('single',$data);

        $elem = Comic::FindOrFail($id);

        return view('single', compact('elem'));
    }
}
