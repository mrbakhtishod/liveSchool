<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class PagesController extends Controller
{
    public function home(){
        return view('site.home.home');
    }

    public function about(){
        $data = [];
        return view('site.about.about', [
            'data' => $data
        ]);
    }

    public function contact(){
        return view('site.news.news');
    }

}
