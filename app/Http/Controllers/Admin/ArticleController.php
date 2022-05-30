<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        // $content = view('admin.articles.create')->render();
        //
        // return response($content)
        //     ->header('Content-Type', 'application/text')
        //     ->header('Content-Length', mb_strlen($content))
        //     ->header('Content-Disposition', 'attachment; filename="text.html"');

        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        dump("method", $request->method());
        dump("is method get?", $request->isMethod('get'));
        dump("is method post?", $request->isMethod('post'));
        dump("get form input value by key 'title'", $request->input('title'));
        dump("get form input value by key 'content'", $request->input('content'));
        dump("form input has value by key 'description'?", $request->has('description'));
        dump("get all request input data", $request->all());
        dump("form has file by key 'file'?", $request->hasFile('file'));
        dump("get only one form values by keys ['title']", $request->only(['title']));
        dump("get all form values except keys ['title']", $request->except(['title']));
        dump("get url without query string", $request->url());
        dump("get full url", $request->fullUrl());
        dump("get query string", $request->query());
        dump("get query string param by key 'id'", $request->query('id'));
    }
}
