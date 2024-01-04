<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // public function home(Request $request, $id){
    //     dd($request->all(), $id);
    //     return view('index');
    // }

    public function home(){
        $articles = DB::table('articles')->where('id', '=', 1)->get();
        // dd($result);
        return view('index', compact('articles'));
    }
}
