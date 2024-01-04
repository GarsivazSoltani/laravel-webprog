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
        
        // $articles = Article::all();
        // $articles = Article::find([1, 3]);
        // $articles = Article::where('id', '<', 3)->get();
        // $articles = Article::first();
        // $articles = Article::orderBy('title', 'DESC')->get();
        // $articles = Article::take(2)->get();

        // $article = new Article();
        // $article->title = 'Article 5';
        // $article->body ='Lorem ipsum';
        // $article->save();

        // $article = new Article([
        //     'title' => 'Article 6',
        //     'body' => 'Lorem ipsum'
        // ]);
        // $article->save();

        // $article = Article::create([
        //     'title' => 'Article 7',
        //     'body' => 'Lorem ipsum'
        // ]);
        
        $id = 12;
        $article = Article::firstOrCreate(['id' => $id], [
            'title' => 'Article' . $id,
            'body' => 'Lorem ipsum'
        ]);

        dd($article);

        // return view('index', compact('articles'));
    }
}
