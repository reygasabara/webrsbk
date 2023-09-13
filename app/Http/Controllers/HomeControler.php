<?php

namespace App\Http\Controllers;

use PhpOption\None;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeControler extends Controller
{
    public function index() {
        return view('home', [
            'title' => 'Beranda',
            'submenu' => null, 
            'posts' => Post::latest()->take(3)->get(), 
        ]);
    }
}
