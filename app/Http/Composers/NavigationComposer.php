<?php

namespace App\Http\Composers;

use App\Article;
use Illuminate\Contracts\View\View;

class NavigationComposer
{
    public function compose(View $view)
    {
        $view->with('latest', Article::latest()->first());
    }
}