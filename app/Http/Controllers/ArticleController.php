<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
        if ($q) {
            $articles = Article::where('name', 'like', "%{$q}%")
                                ->orWhere('body', 'like', "%{$q}%")
                                ->simplePaginate(3);
        } else {
            $articles = Article::simplePaginate(3);
        }
        return view('article.index', compact('articles', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required|unique:articles',
            'body' => 'required|min:10',
        ]);

        $article = new Article();
        $article->fill($data);
        $article->save();

        return redirect()
            ->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $this->validate($request, [
            'name' => 'required|unique:articles,name,' . $article->id,
            'body' => 'required|min:100',
        ]);
    
        $article->fill($data);
        $article->save();
        return redirect()
            ->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article) {
        $article->delete();
        }
        return redirect()->route('articles.index');
    }
}
