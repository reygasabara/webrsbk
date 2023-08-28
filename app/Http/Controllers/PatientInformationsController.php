<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientInformationsController extends Controller
{
    public function showPatientInformations() {
        return view('patientInformations.patientInformations', [
            'title'=> 'Informasi Pasien',
            'submenu' => null,
        ]);
    }
}
