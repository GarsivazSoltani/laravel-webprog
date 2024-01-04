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
        // $article = Article::find(1)->update([
        //     'title' => 'Article One'
        // ]);

        // $article = Article::find(1);
        // $article->update([
        //     'title' => 'Article 1'
        // ]);

        $id = 13;
        $article = Article::updateOrCreate(['id' => $id], [
            'title' => 'Article 13',
            'body' => 'Lorem ipsum'
        ]);

        dd($article);
        // return view('index', compact('articles'));
    }
}
