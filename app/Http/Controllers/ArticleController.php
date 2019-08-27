<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ArticleController extends Controller
{
    private $validationArray = [
        'title' => ['required', 'max:255'],
        'text' => ['required']
    ];
    private $articlePerPage = 4;

    public static function last($count)
    {
        return Article::orderBy('id', 'desc')->take($count)->get();
    }

    public static function popular($count, $skip = 0)
    {
        return Article::orderBy('likes', 'desc')->skip($skip)
            ->take($count)->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = Article::create(request()->validate($this->validationArray)
            + ['user_id' => auth()->id(), 'category_id' => 1]);

        return redirect('/article/'. $article->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('editArticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        request()->validate($this->validationArray);

        $article->title = $request->title;
        $article->text = $request->text;
        $article->update();

        return redirect('/article/'. $article->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect('/');
    }

    public function popularShow($page = 1)
    {
        //only /article/popular url ($page autodefined as integer 1)
        //not /article/popular/1 ($page defined as string "1")
        if ($page === "1"){
            abort(404);
        }

        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });

        $articles = Article::orderBy('likes', 'desc')->paginate($this->articlePerPage);

        return view('feed',compact('articles'));
    }
}
