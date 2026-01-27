<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'dedyas',
                'email' => 'dedyas031209@gmail.com',
                'password' => '03120900',
                'flag' => 'https://flagcdn.com/w320/jp.png',
                'nationality' => 'Japan',
                'image'=>'profile-images/kazuma.jpg'
            ],
            [
                'name' => 'shinkai_makoto',
                'email' => 'shinkai@comicwave.com',
                'password' => 'shinkaithebest',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image'=>'profile-images/shinkai.png'
            ],
            [
                'name' => 'anyaiscute',
                'email' => 'anya@gmail.com',
                'password' => 'spyfamily',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image'=>'profile-images/anya.jpg'
            ],
            [
                'name' => '4_dzan',
                'email' => 'adzanganteng@gmail.com',
                'password' => 'cally0103',
                'flag' => 'https://flagcdn.com/w640/id.png',
                'nationality' => 'Indonesia',
                'image'=>'profile-images/adzan.jpg'
            ],
            [
                'name' => 'lowen',
                'email' => 'lowennotloid@forger.com',
                'password' => 'whyismywifehittingme',
                'flag' => 'https://flagcdn.com/w640/de.png',
                'nationality' => 'Germany',
                'image'=>'profile-images/loid.jpg'
            ],
        ];
        foreach ($users as $user) {
            DB::table('users')->insert([
                'username' => $user['name'],
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'slug' => Str::random(8),
                'flag' => $user['flag'],
                'profile_image'=>$user['image'],
                'nationality' => $user['nationality'],
                'bio'=>fake()->realText(144),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(LikeSeeder::class);
    }
}
