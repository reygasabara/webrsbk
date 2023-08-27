<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileSDMController extends Controller
{
    public function showSDM() {
        return view('profiles.sdm', [
            'title'=> 'Profil',
            'submenu' => 'SDM',
        ]);
    }
}
