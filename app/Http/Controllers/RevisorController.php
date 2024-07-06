<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function becomeRevisor()
    {
        // dd('ciao');
        Mail::to('matteotrotta7@aulabpost.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('home')->with('message', 'complimenti, Hai richiesto di diventare revisor');
    }
    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }



    public function list()
    {
        $articles_to_check = Article::where('is_accepted', null)->get();
        $latest_article = Article::whereNotNull('is_accepted')->latest()->first();
        return view('revisor.table', compact('articles_to_check','latest_article'));
    }
    public function show(Article $article)
    {

        return view('revisor.show', compact('article'));
    }
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        
        return view('revisor.index', compact('article_to_check'));
    }

    public function accept(Article $article)
    {
        $article->setAccepted(true);
        return redirect(route('revisor.list'))->with('message', "Hai accettato l'annuncio $article->title");
    }

    public function reject(Article $article)
    {
        $article->setAccepted(false);
        return redirect(route('revisor.list'))->with('message', "Hai rifiutato l'annuncio $article->title");
    }

    public function undo(Article $article)
{
    $article->undoLastAction();
    return redirect(route('revisor.list'))->with('message', "Hai annullato l'ultima operazione sull'annuncio $article->title");
}
}
