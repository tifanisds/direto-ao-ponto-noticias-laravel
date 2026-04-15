<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use Illuminate\Http\Request;
use App\Models\News; 

class NewsController extends Controller
{
    public function index() 
    {
        return view('admin.news.index');
    }

    public function create() 
    {
        return view('admin.news.create');
    }

    public function store(CreateNewsRequest $request) 
    {
        dd($request->all());
    }

    public function show(News $news) 
    {
        return view('admin.news.show', compact('news'));
    }

    public function edit(News $news) 
    {
        return view('admin.news.edit', compact('news'));
    }

    // Onde estava o erro de sintaxe principal:
    public function update(Request $request, News $news)
    {
        // Lógica para atualizar
    }

    public function destroy(News $news)
    {
        // Lógica para deletar
    }
}