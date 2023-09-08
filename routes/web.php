<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PatientInformationsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicInformationsController;

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
});