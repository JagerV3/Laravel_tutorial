<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        // Show a list of resource
        $articles   = Article::latest()->get();

        return  view('articles.index', ['articles' => $articles]);
    }
    public function show($id)
    {
        // Show a single resource

        $article = Article::find($id);

        return  view('articles.show', ['article' => $article]);
    }
    public function create()
    {
        // Show a view to create a new resource
    }
    public function store()
    {
        // Presist the new resource
    }
    public function edit()
    {
        // Show a view to edit an exisiting resource
    }
    public function update()
    {
        // Presist the edited resource
    }
    public function delete()
    {
        // Delete the resource
    }

}
