<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // public function home(Request $request, $id){
    //     dd($request->all(), $id);
    //     return view('index');
    // }

    public function home(){
        // $result = 
        //     DB::table('articles')
        //     ->where('id', 4)
        //     ->delete();
        
        $articles = Article::all();

        // dd($result);

        return view('index', compact('articles'));
    }
}
