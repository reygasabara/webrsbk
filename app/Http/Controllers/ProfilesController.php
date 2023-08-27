<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function showProfiles() {
        return view('profiles.profiles', [
            'title' => 'Profil',
            'submenu' => null,
        ]);
    }
}
