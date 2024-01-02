<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request, $id){
        dd($request->all(), $id);
        return view('index');
    }
}
