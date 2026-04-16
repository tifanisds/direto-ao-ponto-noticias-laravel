<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use Illuminate\Http\Request;
use App\Models\News; 

class NewsController extends Controller
{
    private $news;

    public function __construct(News $news) 
    {
        $this->news = $news;
    }

    public function index() 
    {
        $news = $this->news->orderBy('id', 'desc')->paginate(10);

        return view('admin.news.index', compact('news'));
    }

    public function create() 
    {
        return view('admin.news.create');
    }

    public function store(CreateNewsRequest $request) 
    {
        $this->news->create($request->all());

        session()->flash("success", "O registro foi gravado com sucesso");

        return redirect()->back();
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