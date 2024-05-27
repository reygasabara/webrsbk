<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OutpacientController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\PublicInformationsController;
use App\Http\Controllers\PatientInformationsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeControler::class, 'Index']) -> name('home');
Route::get('/profil', [ProfilesController::class, 'showProfiles'])->name('profiles');
Route::get('/profil/sejarah', [ProfilesController::class, 'showHistory'])->name('history');
Route::get('/profil/visi-misi', [ProfilesController::class, 'showVisiMisi'])->name('visiMisi');
Route::get('/profil/struktur-organisasi', [ProfilesController::class, 'showStructure'])->name('structure');
Route::get('/profil/sdm', [ProfilesController::class, 'showSDM'])->name('sdm');
Route::get('/profil/denah', [ProfilesController::class, 'showFloorPlan'])->name('floorPlan');
Route::get('/profil/logo', [ProfilesController::class, 'showLogo'])->name('logo');
Route::get('/pelayanan', [ServicesController::class, 'showServices'])->name('services');
Route::get('/pelayanan/rawat-jalan', [ServicesController::class, 'showOutpacient'])->name('outpacient');
Route::get('/pelayanan/rawat-jalan/poli-urologi', [OutpacientController::class, 'showUrologyPoly'])->name('urology');
Route::get('/pelayanan/rawat-jalan/poli-mata', [OutpacientController::class, 'showEyePoly'])->name('eye');
Route::get('/pelayanan/rawat-jalan/poli-tht', [OutpacientController::class, 'showTHTPoly'])->name('tht');
Route::get('/pelayanan/rawat-jalan/poli-kulit-dan-kelamin', [OutpacientController::class, 'showSkinGenitalsPoly'])->name('skin');
Route::get('/pelayanan/rawat-jalan/poli-jantung', [OutpacientController::class, 'showHeartPoly'])->name('heart');
Route::get('/pelayanan/rawat-jalan/poli-anak', [OutpacientController::class, 'showChildPoly'])->name('child');
Route::get('/pelayanan/rawat-jalan/poli-obgyn', [OutpacientController::class, 'showObgynPoly'])->name('obgyn');
Route::get('/pelayanan/rawat-jalan/poli-fisioterapi', [OutpacientController::class, 'showPhysiotherapyPoly'])->name('physiotherapy');
Route::get('/pelayanan/rawat-jalan/poli-bedah-umum', [OutpacientController::class, 'showSurgeryPoly'])->name('surgery');
Route::get('/pelayanan/rawat-jalan/poli-saraf', [OutpacientController::class, 'showNervePoly'])->name('nerve');
Route::get('/pelayanan/rawat-jalan/poli-umum', [OutpacientController::class, 'showGeneralPoly'])->name('general');
Route::get('/pelayanan/rawat-jalan/poli-ortopedi', [OutpacientController::class, 'showOrthopedyPoly'])->name('orthopedy');
Route::get('/pelayanan/rawat-jalan/poli-paru', [OutpacientController::class, 'showLungsPoly'])->name('lungs');
Route::get('/pelayanan/rawat-jalan/poli-gigi', [OutpacientController::class, 'showToothPoly'])->name('tooth');
Route::get('/pelayanan/rawat-jalan/poli-interna', [OutpacientController::class, 'showInternalPoly'])->name('internal');
Route::get('/pelayanan/rawat-inap', [ServicesController::class, 'showInpacient'])->name('inpacient');
Route::get('/pelayanan/penunjang', [ServicesController::class, 'showSupport'])->name('support');
Route::get('/pasien/', [PatientInformationsController::class, 'showPatientInformations'])->name('patientInformations');
Route::get('/pasien/jadwal-dokter', [PatientInformationsController::class, 'showDoctorSchedule'])->name('doctorSchedule');
Route::get('/pasien/informasi-tempat-tidur', [PatientInformationsController::class, 'showBedInformation'])->name('bedInformation');
Route::get('/pasien/alur-pendaftaran', [PatientInformationsController::class, 'showRegistrationFlow'])->name('registrationFlow');
Route::get('/pasien/alur-pendaftaran-via-jkn', [PatientInformationsController::class, 'showJKNRegistrationFlow'])->name('JKNregistrationFlow');
Route::get('/pasien/prosedur-komplain', [PatientInformationsController::class, 'showComplaintProcedure'])->name('complaintProcedure');
Route::get('/publik', [PublicInformationsController::class, 'showPublicInformations'])->name('publicInformations');
Route::get('/publik/informasi-20-besar-penyakit', [PublicInformationsController::class, 'showTopDeseases'])->name('topDeseases');
Route::get('/publik/tarif-pelayanan', [PublicInformationsController::class, 'showServiceRates'])->name('serviceRates');
Route::get('/publik/agenda-kegiatan', [PublicInformationsController::class, 'showAgenda'])->name('agenda');
Route::get('/publik/berita', [PublicInformationsController::class, 'showNews'])->name('news');
Route::get('/publik/berita/{post}', [PublicInformationsController::class, 'showDetailNews'])->name('detailNews');
Route::get('/publik/pmkp', [PublicInformationsController::class, 'showPMKP'])->name('pmkp');
Route::get('/publik/artikel-kesehatan', [PublicInformationsController::class, 'showHealthArticle'])->name('healthArticle');
Route::get('/publik/hasil-survei-kepuasan', [PublicInformationsController::class, 'showSatisfactionSurvey'])->name('satisfactionSurvey');
Route::get('/publik/karir', [PublicInformationsController::class, 'showCareer'])->name('career');
Route::get('/kontak', [ContactUsController::class, 'showContact'])->name('contact');

// ROUTE BACKEND
Route::middleware(['guest'])->group(function() {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function () { 
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/post/checkSlug', [PostController::class, 'checkSlug']);
    Route::resource('/dashboard/post', PostController::class);
    Route::resource('/dashboard/jadwal-dokter', JadwalDokterController::class);
    Route::delete('/dashboard/jadwal-dokter', [PostController::class, 'checkSlug']);
});