<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Resource;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.articles.index', [
            'articles' => Article::all(),
        ]);
    }

    public function create()
    {
        // $content = view('admin.articles.create')->render();
        //
        // return response($content)
        //     ->header('Content-Type', 'application/text')
        //     ->header('Content-Length', mb_strlen($content))
        //     ->header('Content-Disposition', 'attachment; filename="text.html"');
        $categories = Category::all();
        $resources = Resource::all();

        return view('admin.articles.create', [
            'categories' => $categories,
            'resources' => $resources,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:65535'],
            'category_id' => ['required', 'exists:categories,id'],
            'resource_id' => ['required', 'exists:resources,id'],
        ]);

        // 1 Need fillable
        // $article = new Article();
        // $article->fill($validated);
        // $article->save();

        // 2 Need fillable
        (new Article($validated))->save();

        // 3 No need fillable
        // $article = new Article();
        // $article->name = $request->input('name');
        // $article->content = $request->input('content');
        // $article->category_id = $request->input('category_id');
        // $article->resource_id = $validated['resource_id'];
        // $article->save();

        // 4 Need fillable
        // Article::create($validated);

        // 5 Need fillable
        // Article::create([
        //     'name' => $request->input('name'),
        //     'content' => $request->input('content'),
        //     'category_id' => $request->input('category_id'),
        //     'resource_id' => $request->input('resource_id'),
        // ]);

        return redirect()->route('admin.articles.index');
        // dump("method", $request->method());
        // dump("is method get?", $request->isMethod('get'));
        // dump("is method post?", $request->isMethod('post'));
        // dump("get form input value by key 'title'", $request->input('title'));
        // dump("get form input value by key 'content'", $request->input('content'));
        // dump("form input has value by key 'description'?", $request->has('description'));
        // dump("get all request input data", $request->all());
        // dump("form has file by key 'file'?", $request->hasFile('file'));
        // dump("get only one form values by keys ['title']", $request->only(['title']));
        // dump("get all form values except keys ['title']", $request->except(['title']));
        // dump("get url without query string", $request->url());
        // dump("get full url", $request->fullUrl());
        // dump("get query string", $request->query());
        // dump("get query string param by key 'id'", $request->query('id'));
    }
}
