<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        $data = News::all();
        return view('about', [
            'data' => $data
        ]);
    }

    public function contact(){
        return view('contact');
    }

}
