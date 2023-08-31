<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Administrator',
            'username' => 'adminrsbk',
            'email' => 'rumkitbhykendari3@gmail.com',
            'password' => Hash::make('rsbkendari3'),
            'level' => 1,
        ]);

        DB::table('posts')->insert([
            'id_berita' => 1,
            'judul' => 'Judul Berita',
            'berita' => '<p align="justify">RS BHAYANGKARA KENDARI<p align="justify">',
            'deskripsi' => 'RS BHAYANGKARA KENDARI',
            'foto' => null,
            'id_user' => 1,
        ]);
    }
}
