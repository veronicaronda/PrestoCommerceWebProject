<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view(
            'welcome',
            compact('articles')
        );
    }

    public function lavoraconnoi()
    {
        return view('mail.lavoraconnoi');
    }
    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);
        return view('article.searched', ['articles' => $articles, 'query' => $query]);
    }

    public function profile()
    {

        return view('profile.profile');
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
