<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ProfileSDMController;
use App\Http\Controllers\ProfileLogoController;
use App\Http\Controllers\ProfileHistoryController;
use App\Http\Controllers\ProfileVisiMisiController;
use App\Http\Controllers\ProfileFloorPlanController;
use App\Http\Controllers\ProfileOrganizationalStructureController;

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
Route::get('/profil/sejarah', [ProfileHistoryController::class, 'showHistory'])->name('history');
Route::get('/profil/visi-misi', [ProfileVisiMisiController::class, 'showVisiMisi'])->name('visiMisi');
Route::get('/profil/struktur-organisasi', [ProfileOrganizationalStructureController::class, 'showStructure'])->name('structure');
Route::get('/profil/sdm', [ProfileSDMController::class, 'showSDM'])->name('sdm');
Route::get('/profil/denah', [ProfileFloorPlanController::class, 'showFloorPlan'])->name('floorPlan');
Route::get('/profil/logo', [ProfileLogoController::class, 'showLogo'])->name('logo');
Route::get('/pelayanan', [ServicesController::class, 'showServices'])->name('services');
