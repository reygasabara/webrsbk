<?php

namespace App\Http\Controllers;

use PhpOption\None;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeControler extends Controller
{
    public function index() {
        return view('home', [
            'title' => 'Beranda',
            'submenu' => null, 
            'allNews' => News::latest()->take(3)->get(), 
        ]);
    }
}
