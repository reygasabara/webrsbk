<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOption\None;

class HomeControler extends Controller
{
    public function index() {
        return view('home', [
            'title' => 'Beranda',
            'submenu' => null,  
        ]);
    }
}
