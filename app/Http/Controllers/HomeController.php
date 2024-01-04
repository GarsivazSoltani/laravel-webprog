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
        // $articles = DB::table('articles')->where('id', '=', 1)->get();
        // dd($result);
        // return view('index', compact('articles'));

        // $result = DB::table('articles')->insert([
        //     ['title' => 'Title 3', 'body' => 'Lorem ipsum'],
        //     ['title' => 'Title 4', 'body' => 'Lorem ipsum']
        // ]);

        // $result = 
        //     DB::table('articles')
        //     ->where('id', '=', 4)
        //     ->update(['title' => 'title 44', 'body' => 'Lorem 4']);

        $result = 
            DB::table('articles')
            ->where('id', 4)
            ->delete();
        
        dd($result);
    }
}
