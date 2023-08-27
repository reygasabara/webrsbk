<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileFloorPlanController extends Controller
{
    public function showFloorPlan() {
        return view('profiles.floorPlan', [
            'title'=> 'Profil',
            'submenu' => 'Denah Rumah Sakit',
        ]);
    }
}
