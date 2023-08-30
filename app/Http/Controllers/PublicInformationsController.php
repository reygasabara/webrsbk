<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicInformationsController extends Controller
{
    public function showPublicInformations() {
        return view('publicInformations.publicInformations', [
            'title'=> 'Informasi Publik',
            'submenu' => null,
        ]);
    }
}
