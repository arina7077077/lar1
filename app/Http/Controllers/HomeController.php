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
        $params = [
            'text' => "$text <p>some text</p>",
            'url1' => route('static-pages.info'),
            'url2' => route('static-pages.articles'),
        ];

        // return view('home', [
        //     'text' => $text,
        //     'params' => $params,
        // ]);

        return view('home', [
            'articles' => $this->articles,
            'text' => $text,
        ]);
    }

    public function show(int|string $id)
    {
        $article = array_filter($this->articles, static fn($item) => $item['id'] == $id);

        return array_values($article)[0]['content'];
    }
}
