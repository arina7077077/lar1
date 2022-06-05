<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{Article, Category, Resource};

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
        // $collection = collect([100, -50, 45, 3000]);
        //
        // dd(
        //     $collection->count(),
        //     $collection->min(),
        //     $collection->max(),
        //     $collection->last(),
        //     $collection->first(),
        //     $collection->sort(),
        // );
        $text = "lorem ipsum12321312";

        // $allArticles = Article::all();
        $articles = Article::query()->where('category_id', '>', 8)->get();
        // $articles = Article::query()->paginate(4);
        // dd($articles->keyBy('id'));
        // dd($articles->keyBy('id')->get(8));
        // dd($allArticles->diff($articles));

        if ($articles->isEmpty()) {
            return redirect()->route('home');
        }

        return view('static-pages.articles', [
            'articles' => $articles,
            'text' => $text,
        ]);

    }

    public function show(Article $article)
    {
        // $article = Article::find($id);
        $resource = Resource::findOrFail($article->resource_id);
        $category = Category::findOrFail($article->category_id);
        // if (!$article) {
        //     return redirect()->route('home');
        // }

        return view('static-pages.article', [
            'article' => $article,
            'resource' => $resource,
            'category' => $category,
        ]);
    }



}
