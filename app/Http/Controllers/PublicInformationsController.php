<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;

class PublicInformationsController extends Controller
{
    public function showPublicInformations() {
        return view('publicInformations.publicInformations', [
            'title'=> 'Informasi Publik',
            'submenu' => null,
        ]);
    }

    public function showTopDeseases() {
        return view('publicInformations.topDeseases', [
            'title'=> 'Informasi Publik',
            'submenu' => 'Informasi 20 Besar Penyakit',
        ]);
    }

    public function showServiceRates() {
        return view('publicInformations.serviceRates', [
            'title'=> 'Informasi Publik',
            'submenu' => 'Tarif Pelayanan',
        ]);
    }

    public function showAgenda() {
        return view('publicInformations.agenda', [
            'title'=> 'Informasi Publik',
            'submenu' => 'Agenda Kegiatan',
        ]);
    }

    public function showNews() {
        return view('publicInformations.news', [
            'title'=> 'Informasi Publik',
            'submenu' => 'Berita',
            'latest' => Post::latest()->first(),
            'posts' => Post::all()
        ]);
    }

    public function showDetailNews(Post $post) {
        $carbon = Carbon::parse($post->updated_at);
        $carbon->setTimezone('Asia/Shanghai');

        $date = $carbon->translatedFormat('j F Y');
        $time = $carbon->translatedFormat('H:i');

        $post->formatted_date = $date . ', pukul ' . $time;

        return view('publicInformations.detailNews', [
            'title'=> 'Informasi Publik',
            'submenu' => 'Berita',
            'post' => $post,
        ]);
    }

    public function showPMKP() {
        return view('publicInformations.pmkp', [
            'title'=> 'Informasi Publik',
            'submenu' => 'PMKP',
        ]);
    }

    public function showHealthArticle() {
        return view('publicInformations.healthArticle', [
            'title'=> 'Informasi Publik',
            'submenu' => 'Artikel Kesehatan',
        ]);
    }

    public function showSatisfactionSurvey() {
        return view('publicInformations.satisfactionSurvey', [
            'title'=> 'Informasi Publik',
            'submenu' => 'Hasil Survei Kepuasan',
        ]);
    }

    public function showCareer() {
        return view('publicInformations.career', [
            'title'=> 'Informasi Publik',
            'submenu' => 'Karir',
        ]);
    }
}
