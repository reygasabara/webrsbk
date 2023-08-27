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
}
