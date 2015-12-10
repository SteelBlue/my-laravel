<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Flash;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Show all articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();

        return view('blog.index', compact('articles'));
    }

    /**
     * Show a single article.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('blog.show', compact('article'));
    }

// SHOW INDIVIDUAL ARTICLE USING A SLUG
//    public function show( $slug )
//    {
//        $title = str_replace('-', ' ', $slug);
//        $article = Article::where('title', $title)->get();
//
//        return $article;
//    }

    /**
     * Show the page to create a new article.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Save a new article.
     *
     * @return Redirect
     */
    public function store(CreateArticleRequest $request)
    {
        // Create the Article
        Article::create($request->all());

        // Success Message
        Flash::success('Your article has been created.');

        return redirect('blog');
    }

    /**
     * Show the page to edit an article.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('blog.edit', compact('article'));
    }

    public function update($id, Request $request)
    {
        $article = Article::findOrFail($id);

        $article->update($request->all());

        // Success Message
        Flash::success('Your article has been updated.');

        return redirect('blog');
    }
}
