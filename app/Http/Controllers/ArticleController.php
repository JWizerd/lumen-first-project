<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index() 
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    public function single($id) 
    {
        $article = Article::find($id);
        return response()->json($article);
    }

    public function saveArticle(Request $request) 
    {   
        $post = $request->all();
        Article::create($post);
    }

    public function deleteArticle($id) 
    {
        Article::find($id)->delete();
    }

    public function updateArticle(Request $request,$id){
        $article  = Article::find($id);
 
        $article->title = $request->input('title');
        $article->body = $request->input('body');
 
        $article->save();
 
        return response()->json($article);
    }
}
