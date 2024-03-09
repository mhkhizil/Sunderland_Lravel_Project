<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::when(request()->has('keyword'),function($query){
            $keyword=request()->keyword;
             $query->where("title","like","%".$keyword."%");
            $query->orWhere("description","like","%".$keyword."%");

        })->when(request()->has('name'),function($query){
            $sortType=request()->name ??"asc";
            $query->orderBy("title",$sortType);
        })->paginate(7)->withQueryString();
        return view("article.index",compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article=Article::create([
            "title"=>$request->title,
            "description"=>$request->description,
            "user_id"=>Auth::id()
        ]);
        return redirect()->route("article.index")->with("message",$article->title." is created successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
