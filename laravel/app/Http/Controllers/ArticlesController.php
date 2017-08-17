<?php

namespace App\Http\Controllers;
use App\Category;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('admin.articles.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        if($request->hasFile('preview'))
        {
            $date=date('d.m.Y');
            $root=$_SERVER['DOCUMENT_ROOT']."/images/";
            if(!file_exists($root.$date))    {mkdir($root.$date);}
            $f_name=$request->file('preview')->getClientOriginalName();
            $request->file('preview')->move($root.$date,$f_name);
            $all=$request->all();
            $all['preview']="/images/".$date."/".$f_name;
            Article::create($all);
        }
        else
        {
            Article::create($request->all());
        }
        return back()->with('message','Article added');
    }

    public function index()
    {
        $articles=Article::all();
        return view('admin.articles.articles',['articles'=>$articles]);
    }

    public function destroy($id)
    {
        $article=Article::find($id);
        $article->delete();
        $root=$_SERVER['DOCUMENT_ROOT'];
        if(!empty($article->preview))
        {
            unlink($root.$article->preview);
        }
        return back()->with('message','Article deleted');
    }

    public function edit($id)
    {
        $article=Article::find($id);
        $categories=Category::all();
        return view('admin.articles.edit',['article'=>$article,'categories'=>$categories]);
    }

    public function update(Request $request,$id)
    {
        $article=Article::find($id);
        if($request->hasFile('preview'))
        {
            $date=date('d.m.Y');
            $root=$_SERVER['DOCUMENT_ROOT']."/images/";
            if(!file_exists($root.$date))    {mkdir($root.$date);}
            $f_name=$request->file('preview')->getClientOriginalName();
            $request->file('preview')->move($root.$date,$f_name);
            $all=$request->all();
            $all['preview']="/images/".$date."/".$f_name;
            $article->update($all);
        }
        else
        {
            $article->update($request->all());
        }
        return back()->with('message', 'Article changed');
    }
}
