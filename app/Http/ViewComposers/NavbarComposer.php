<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Article;

class NavbarComposer
{
    public function compose(View $view)
    {

        $articlesCount = Article::where('is_accepted', null)
            ->where('user_id', '!=', auth()->id())
            ->count();
        $view->with('articlesCount', $articlesCount);
    }

}

