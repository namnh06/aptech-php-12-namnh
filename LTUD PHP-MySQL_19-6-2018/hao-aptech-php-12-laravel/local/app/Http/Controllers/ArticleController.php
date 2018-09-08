<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{

    public function index()
    {
        $Articles = Article::all();
        return view('Article.Article-home', ['Articles' => $Articles]);
    }

    public function create()
    {
        return view('Article.Article-create');
    }

    public function store(Request $request)
    {
        $Article = new Article();

        $Article->name = $request->Article;
        $Article->save();
        return redirect()->route('Article-home');
    }

    public function show($id)
    {
        $Article = Article::find($id);
        return view('Article.Article-detail', ['Article' => $Article]);
    }

    public function edit($id)
    {
        $Article = Article::find($id);
        return view('Article.Article-edit', ['Article' => $Article]);
    }


    public function update(Request $request, $id)
    {
        $Article = Article::find($id);
        $Article->name = $request->Article;
        $Article->save();
        return redirect()->route('Article-home');
    }


    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->route('Article-home');
    }

}
