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

    public function showHistory() {
        return view('profiles.history', [
            'title' => 'Profil',
            'submenu' => 'Sejarah',
        ]);
    }

    public function showVisiMisi() {
        return view('profiles.visiMisi', [
            'title' => 'Profil',
            'submenu' => 'Visi dan Misi',
        ]);
    }

    public function showStructure() {
        return view('profiles.structure', [
            'title'=> 'Profil',
            'submenu' => 'Struktur Organisasi',
        ]);
    }

    public function showSDM() {
        return view('profiles.sdm', [
            'title'=> 'Profil',
            'submenu' => 'SDM',
        ]);
    }

    public function showFloorPlan() {
        return view('profiles.floorPlan', [
            'title'=> 'Profil',
            'submenu' => 'Denah Rumah Sakit',
        ]);
    }

    public function showLogo() {
        return view('profiles.logo', [
            'title'=> 'Profil',
            'submenu' => 'Logo',
        ]);
    }
}
