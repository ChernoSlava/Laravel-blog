<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleComment;
use Illuminate\Http\Request;

class ArticleCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ArticleComment::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Article $article)
    {
        $data = $this->validate($request, [
            'user' => 'required',
            'content' => 'required|min:10',
        ]);
        $data['user_id'] = 4;
        $data['article_id'] = $article->id;

        $article = new ArticleComment();
        $article->fill($data);
        $article->save();

        return redirect()
            ->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article, ArticleComment $articleComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article, ArticleComment $articleComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article, ArticleComment $articleComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article, ArticleComment $articleComment)
    {
        //
    }
}
