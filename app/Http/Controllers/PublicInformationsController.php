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

    public function showTopDeseases() {
        return view('publicInformations.topDeseases', [
            'title'=> 'Informasi Publik',
            'submenu' => 'Informasi 20 Besar Penyakit',
        ]);
    }

    public function showServiceRates() {
        return view('publicInformations.serviceRates', [
            'title'=> 'Informasi Publik',
            'submenu' => 'Tarif Pelayanan',
        ]);
    }
}
