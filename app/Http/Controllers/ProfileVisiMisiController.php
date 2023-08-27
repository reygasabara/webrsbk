<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileVisiMisiController extends Controller
{
    public function showVisiMisi() {
        return view('profiles.visiMisi', [
            'title' => 'Profil',
            'submenu' => 'Visi dan Misi',
        ]);
    }
}
