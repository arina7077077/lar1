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
        // $articles = \DB::select('SELECT id, title, content, is_active FROM articles WHERE is_active = 1');
        // dd($articles);
        // if (empty($articles)) {
        //     return redirect()->route('home');
        // }
        $articles = \DB::table('articles')->where('is_active', true)->get();
        // dd($articles);
        if ($articles->isEmpty()) {
            return redirect()->route('home');
        }
        // dd(
        //     $articles->count(),
        //     $articles->max('id')
        // );

        // \DB::insert();
        // \DB::update();
        // \DB::delete()

        return view('home', [
            'articles' => $articles,
            'text' => $text,
        ]);

        // return response()->json($this->articles);
    }

    public function show(int|string $id)
    {
        // $article = array_filter($this->articles, static fn($item) => $item['id'] == $id);
        //
        // return array_values($article)[0]['content'];

        // $article = \DB::select("SELECT id, title, content, is_active FROM articles WHERE id = $id");
        // dd($articles);
        // return view('static-pages.article', ['article' => $article[0]]);

        $article = \DB::table('articles')->find($id);
        // dd($article);
        if (!$article) {
            return redirect()->route('home');
        }


        return view('static-pages.article', ['article' => $article]);
    }
}
