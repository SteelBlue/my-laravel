<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Flash;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display all blog articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest('published_at')->get();

        return view('blog.index', compact('articles'));
    }

    /**
     * Display an individual blog article.
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id )
    {
        $article = Article::findOrFail( $id );

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
     * Display a create article page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store the new article, and redirect to blog
     *
     * @return Redirect
     */
    public function store()
    {
        // Create the Article
        Article::create(Request::all());

        // Success Message
        Flash::success('Your article has been created.');

        return redirect('blog');
    }
}
