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
        // $article = Article::find(1)->delete();
        // $article = Article::where('id', 2)->delete();
        // $article = Article::destroy([1,4,6]);
        // $article = Article::where('id', 7)->delete();
        // $article = Article::find(7);
        // $article = Article::withTrashed()->find(7);
        // $article = Article::onlyTrashed()->get();
        // $article = Article::onlyTrashed()->find(7);
        // $article->restore();
        // $article = Article::where('id', 7)->forceDelete();
        // Global Scope
        // $article = Article::all();
        // $article = Article::withoutGlobalScope('status')->get();
        // Local Scope
        $article = Article::status(0)->get();

        dd($article);
        // return view('index', compact('articles'));
    }
}
