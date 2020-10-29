<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $news = null;
        $search = $request->input('search');

        if ($search != null || $search!='') //Szukanie przez AGOLIE |
            $news = News::search($search)->get()->sortByDesc("created_at")->sortByDesc("pinned");
        else
            $news = News::all()->sortByDesc("created_at")->sortByDesc("pinned");

        return view("dashboard.news.news", ['news'=>$news]);
    }

    //TODO return json search result of news

    public function create()
    {
        return view("dashboard.news.create");
    }

    public function create_store(Request $request)
    {
        $news = new News();

        $news->title = $request->input("title_field");
        $news->content = $request->input("content_field");
        $news->pinned = $request->input("pinned_field") == "on" ? 1 : 0;
        $news->save();

        return redirect()->route("dashboard.news");
    }

    public function update($id)
    {
        $edit_news = News::find($id);

        return view("dashboard.news.edit", ['edit_news' => $edit_news]);
    }

    public function update_store(Request $request)
    {
        $news = News::find($request->id);

        $news->title = $request->input("title_field");
        $news->content = $request->input("content_field");
        $news->pinned = $request->input("pinned_field") == "on" ? 1 : 0;
        $news->update();

        return redirect()->route("dashboard.news");
    }

    public function delete($id)
    {
        $news = News::find($id);

        if ($news!=null)
            $news->delete();

        return redirect()->route("dashboard.news");
    }
}
