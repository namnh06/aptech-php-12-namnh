<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $categories = Article::all();
        return view('category.category-home', ['categories' => $categories]);
    }

    public function create()
    {
        return view('category.category-create');
    }

    public function store(Request $request)
    {
        $category = new Article();

        $category->name = $request->category;
        $category->save();
        return redirect()->route('category-home');
    }

    public function show($id)
    {
        $category = Article::find($id);
        return view('category.category-detail', ['category' => $category]);
    }

    public function edit($id)
    {
        $category = Article::find($id);
        return view('category.category-edit', ['category' => $category]);
    }


    public function update(Request $request, $id)
    {
        $category = Article::find($id);
        $category->name = $request->category;
        $category->save();
        return redirect()->route('category-home');
    }


    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->route('category-home');
    }
}
