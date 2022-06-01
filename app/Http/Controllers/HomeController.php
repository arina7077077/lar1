<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeController extends Controller
{
    private array $articles = [
        [
            'id' => 1,
            'title' => 'WTF',
            'content' => 'сегодня ничего не произошло. шок'
        ],
        [
            'id' => 2,
            'title' => 'vse spokoino',
            'content' => 'idi pospi'
        ],
    ];

    public function index()
    {
        $text = "lorem ipsum12321312";

        $articles = \DB::table('articles')->get();

        if ($articles->isEmpty()) {
            return redirect()->route('home');
        }


        return view('static-pages.articles', [
            'articles' => $articles,
            'text' => $text,
        ]);

    }

    public function show(int|string $id)
    {

        $article = \DB::table('articles')->find($id);
        $resource = \DB::table('resources')->where('id', $article->resource_id)->first();
        $category = \DB::table('categories')->where('id', $article->category_id)->first();
        if (!$article) {
            return redirect()->route('home');
        }

        return view('static-pages.article', [
            'article' => $article,
            'resource' => $resource,
            'category' => $category,
        ]);
    }



}
