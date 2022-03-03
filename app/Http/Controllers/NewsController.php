<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news', ['title' => 'News']);
    }

    public function kpop($id)
    {
        return view('news-kpop',
                ['id' => $id],
                ['title' => 'K-POP']
            );
    }

    public function gaming($id)
    {
        return view('news-gaming', 
        ['id' => $id],
        ['title' => 'Gaming']
);
    }

    public function tech($id)
    {
        return view('news-tech', 
        ['id' => $id],
        ['title' => 'Gaming']
    );
    }
}
