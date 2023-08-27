<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileLogoController extends Controller
{
    public function showLogo() {
        return view('profiles.logo', [
            'title'=> 'Profil',
            'submenu' => 'Logo',
        ]);
    }
}
