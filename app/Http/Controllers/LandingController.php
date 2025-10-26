<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function blogShow()
    {
        Carbon::setLocale('ru');
        date_default_timezone_set('Europe/Moscow');

        $articles = Article::where('status', Article::STATUS_PUBLISHED)
            ->orderBy('published_at', 'desc')->paginate(3);

        foreach ($articles as $article) {
            $publishedAt = Carbon::parse($article->published_at)->setTimezone('Europe/Moscow');

            if ($publishedAt->isToday()) {
                $article->human_published_at = 'сегодня';
            } elseif ($publishedAt->isYesterday()) {
                $article->human_published_at = 'вчера';
            } elseif ($publishedAt->isCurrentYear()) {
                $article->human_published_at = $publishedAt->translatedFormat('j F');
            } else {
                $article->human_published_at = $publishedAt->translatedFormat('j F Y');
            }
        }

        return view('landing.blog',compact('articles'));
    }

    public function blogArticleShow(Request $request, string $slug)
    {
        $article = Article::where('status', Article::STATUS_PUBLISHED)->where('slug', $slug)->firstOrFail();
        return view('landing.blog_article',compact('article'));
    }
}
