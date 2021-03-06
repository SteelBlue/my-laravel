<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Flash;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Create a new articles controller instance.
     *
     * ArticlesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

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
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article)
    {
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
        $tags = Tag::lists('name', 'id');

        return view('blog.create', compact('tags'));
    }

    /**
     * Save a new article.
     *
     * @param ArticleRequest $request
     * @return Redirect
     */
    public function store(ArticleRequest $request)
    {
        // Create the new article with the user_id and tags
        $this->createArticle($request);

        // Success Message
        Flash::success('Your article has been created.');

        return redirect('blog');
    }

    /**
     * Show the page to edit an article.
     *
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Article $article)
    {
        $tags = Tag::lists('name', 'id');

        return view('blog.edit', compact('article', 'tags'));
    }

    /**
     * Update an article.
     *
     * @param Article $article
     * @param ArticleRequest $request
     * @return Redirect
     */
    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());

        $this->syncTags($article, $request->input('tag_list'));

        // Success Message
        Flash::success('Your article has been updated.');

        return redirect('blog');
    }


    /**
     * Sync up the list of tags in the database.
     *
     * @param Article $article
     * @param array $tags
     */
    private function syncTags(Article $article, array $tags)
    {
        $article->tags()->sync($tags);
    }

    /**
     * Create a new article.
     *
     * @param $request
     * @return mixed
     */
    private function createArticle($request)
    {
        // Create the new article with the user_id.
        $article = Auth::user()->articles()->create($request->all());

        // Sync the article tags.
        $this->syncTags($article, $request->input('tag_list'));

        return $article;
    }
}
