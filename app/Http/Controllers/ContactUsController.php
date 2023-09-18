<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function showContact() {
        return view('contact', [
            'title'=> 'Hubungi Kami',
            'submenu' => null,
        ]);
    }
}
