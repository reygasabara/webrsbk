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

    public function showDoctorSchedule() {
        return view('patientInformations.doctorSchedule', [
            'title'=> 'Informasi Pasien',
            'submenu' => 'Jadwal Dokter',
        ]);
    }

    public function showBedInformation() {
        return view('patientInformations.bedInformation', [
            'title'=> 'Informasi Pasien',
            'submenu' => 'Informasi Tempat Tidur',
        ]);
    }

    public function showRegistrationFlow() {
        return view('patientInformations.registrationFlow', [
            'title'=> 'Informasi Pasien',
            'submenu' => 'Alur Pendaftaran',
        ]);
    }

    public function showJKNRegistrationFlow() {
        return view('patientInformations.JKNRegistrationFlow', [
            'title'=> 'Informasi Pasien',
            'submenu' => 'Alur Pendaftaran Via JKN',
        ]);
    }

    public function showComplaintProcedure() {
        return view('patientInformations.complaintProcedure', [
            'title'=> 'Informasi Pasien',
            'submenu' => 'Prosedur Komplain',
        ]);
    }
}
