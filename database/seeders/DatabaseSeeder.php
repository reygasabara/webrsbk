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
            'id' => 1,
            'judul' => 'RS Bhayangkara Kendari',
            'slug' => 'rs-bhayangkara-kendari',
            'berita' => '<p align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem voluptates possimus corporis totam eius. Accusantium, dolorum. Repellat nobis tenetur ullam tempora fugit aperiam consequatur iure in, inventore aliquam? Veniam inventore possimus odit facilis officiis quae animi nam eius adipisci eaque nisi ad optio dolorem consectetur corporis veritatis, iure commodi id nobis, voluptatibus nostrum repudiandae quos consequuntur? Voluptatum adipisci quae praesentium placeat obcaecati harum, laborum molestias esse autem corrupti dolores et alias, qui itaque. Ratione harum soluta repellendus aperiam dignissimos voluptate dolorem sit, cum id aut asperiores excepturi ex recusandae accusantium ad facilis reprehenderit odit optio enim magnam necessitatibus molestiae. Blanditiis!<p align="justify"><p align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit quisquam pariatur odio aut natus eum quas voluptates provident! Odio id laborum minus expedita distinctio labore aut dolor modi officiis temporibus? Consequatur soluta velit quaerat explicabo laudantium eius enim, voluptatem eveniet ducimus accusamus excepturi, earum recusandae atque voluptatibus similique deserunt, laboriosam accusantium amet quis corrupti officia? Consequatur quaerat facere architecto, sed doloribus quis ipsum velit quos nobis dolore repellendus aliquam impedit natus earum necessitatibus ea corrupti voluptatibus. Excepturi expedita commodi delectus ea earum fuga odio cumque rem nam quasi molestias, aliquid nulla qui fugiat necessitatibus omnis animi amet. Ab, commodi.</p>',
            'foto' => null,
            'id_user' => 1,
        ]);
    }
}
