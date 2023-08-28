<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function showServices() {
        return view('services.services', [
            'title'=> 'Pelayanan',
            'submenu' => null,
        ]);
    }

    public function showOutpacient() {
        return view('services.outpacient', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showInpacient() {
        return view('services.inpacient', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Inap',
        ]);
    }

    public function showSupport() {
        return view('services.support', [
            'title'=> 'Pelayanan',
            'submenu' => 'Penunjang',
        ]);
    }
}
