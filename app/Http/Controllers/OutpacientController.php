<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutpacientController extends Controller
{
    public function showUrologyPoly() {
        return view('services.urologyPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showEyePoly() {
        return view('services.eyePoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showTHTPoly() {
        return view('services.THTPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showSkinGenitalsPoly() {
        return view('services.skinGenitalsPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showHeartPoly() {
        return view('services.heartPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showChildPoly() {
        return view('services.childPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showObgynPoly() {
        return view('services.obgynPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showPhysiotherapyPoly() {
        return view('services.physiotherapyPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showSurgeryPoly() {
        return view('services.surgeryPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showNervePoly() {
        return view('services.nervePoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showGeneralPoly() {
        return view('services.generalPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showOrthopedyPoly() {
        return view('services.orthopedyPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showLungsPoly() {
        return view('services.lungsPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showToothPoly() {
        return view('services.toothPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }

    public function showInternalPoly() {
        return view('services.internalPoly', [
            'title'=> 'Pelayanan',
            'submenu' => 'Rawat Jalan',
        ]);
    }
}
