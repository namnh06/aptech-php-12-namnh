<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function home(){
        $home = Article::select('*')->get();
        return view('home',compact('home'));
    }
    public function create(){
        return view('article.create');
    }
    public function postCreate(Request $request){
        $title = $request->input('title');
        $content = $request->input('content');
       
        $article = new Article;

        $article->title = $title;
        $article->content = $content;

        $article->save();

        return redirect()->route('home');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('article.edit',['article'=>$article]);
    }
    public function postEdit(Request $request,$id){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();
        return redirect()->route('home');
    }
    public function getDelete($id){
        // dd($id);//cai nay la debug ra xem id la bao nhieu
        $article = Article::find($id);
        $article->delete($id);
        return redirect('home');
    }
}
