<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileHistoryController extends Controller
{
    public function showHistory() {
        return view('profiles.history', [
            'title' => 'Profil',
            'submenu' => 'Sejarah',
        ]);
    }
}