<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['judul', 'berita', 'foto', 'deskripsi_foto'];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable():array {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }
}
