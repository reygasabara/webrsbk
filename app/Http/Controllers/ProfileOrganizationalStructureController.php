<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileOrganizationalStructureController extends Controller
{
    public function showStructure() {
        return view('profiles.structure', [
            'title'=> 'Profil',
            'submenu' => 'Struktur Organisasi',
        ]);
    }
}
