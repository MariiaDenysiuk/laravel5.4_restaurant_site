<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view('site.home.index');
    }

    public function blog()
    {
        $articles=Article::where('public','=',1)->get();
        return view('site.blog.index',['articles'=>$articles]);
    }

    public function show($id)
    {
        $article=Article::where('public','=',1)->find($id);
        return view('site.blog.show',['article'=>$article]);
    }

    public function reservation()
    {
        return view('site.reservation.index');
    }

    public function about()
    {
        return view('site.about.index');
    }

    public function contacts()
    {
        return view('site.contacts.index');
    }

    public function gallery()
    {
        return view('site.gallery.index');
    }
}
