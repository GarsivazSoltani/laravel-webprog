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
        $articles = Article::all();
        Article::create([
            'title' => 'Article 15',
            'body' => 'Lorem ipsum'
        ]);
        // dd($article);
        return view('index', compact('articles'));
    }
}
