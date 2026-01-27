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
        // $users = [
        //     [
        //         'name' => 'dedyas',
        //         'email' => 'dedyas031209@gmail.com',
        //         'password' => '03120900',
        //         'flag' => 'https://flagcdn.com/w320/jp.png',
        //         'nationality' => 'Japan',
        //         'image'=>'profile-images/kazuma.jpg'
        //     ],
        //     [
        //         'name' => 'shinkai_makoto',
        //         'email' => 'shinkai@comicwave.com',
        //         'password' => 'shinkaithebest',
        //         'flag' => 'https://flagcdn.com/w640/jp.png',
        //         'nationality' => 'Japan',
        //         'image'=>'profile-images/shinkai.png'
        //     ],
        //     [
        //         'name' => 'anyaiscute',
        //         'email' => 'anya@gmail.com',
        //         'password' => 'spyfamily',
        //         'flag' => 'https://flagcdn.com/w640/jp.png',
        //         'nationality' => 'Japan',
        //         'image'=>'profile-images/anya.jpg'
        //     ],
        //     [
        //         'name' => '4_dzan',
        //         'email' => 'adzanganteng@gmail.com',
        //         'password' => 'cally0103',
        //         'flag' => 'https://flagcdn.com/w640/id.png',
        //         'nationality' => 'Indonesia',
        //         'image'=>'profile-images/adzan.jpg'
        //     ],
        //     [
        //         'name' => 'lowen',
        //         'email' => 'lowennotloid@forger.com',
        //         'password' => 'whyismywifehittingme',
        //         'flag' => 'https://flagcdn.com/w640/de.png',
        //         'nationality' => 'Germany',
        //         'image'=>'profile-images/loid.jpg'
        //     ],
        // ];
    $users = [
            // Original 5 characters
            [
                'name' => 'dedyas',
                'email' => 'dedyas031209@gmail.com',
                'password' => '03120900',
                'flag' => 'https://flagcdn.com/w320/jp.png',
                'nationality' => 'Japan',
                'image' => 'profile-images/kazuma.jpg',
            ],
            [
                'name' => 'shinkai_makoto',
                'email' => 'shinkai@comicwave.com',
                'password' => 'shinkaithebest',
                'flag' => 'https://flagcdn.com/w320/jp.png',
                'nationality' => 'Japan',
                'image' => 'profile-images/shinkai.png',
            ],
            [
                'name' => 'anyaiscute',
                'email' => 'anya@gmail.com',
                'password' => 'spyfamily',
                'flag' => 'https://flagcdn.com/w320/jp.png',
                'nationality' => 'Japan',
                'image' => 'profile-images/anya.jpg',
            ],
            [
                'name' => '4_dzan',
                'email' => 'adzanganteng@gmail.com',
                'password' => 'cally0103',
                'flag' => 'https://flagcdn.com/w320/id.png',
                'nationality' => 'Indonesia',
                'image' => 'profile-images/adzan.jpg',
            ],
            [
                'name' => 'lowen',
                'email' => 'lowennotloid@forger.com',
                'password' => 'whyismywifehittingme',
                'flag' => 'https://flagcdn.com/w320/de.png',
                'nationality' => 'Germany',
                'image' => 'profile-images/loid.jpg',
            ],

            // Detective Conan characters (11 from previous expansion)
            [
                'name' => 'Conan Edogawa',
                'email' => 'conan@teitan.com',
                'password' => 'shinichi_kudo',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/9/310307.jpg',
            ],
            [
                'name' => 'Ran Mouri',
                'email' => 'ran.mouri@gmail.com',
                'password' => 'karatechamp',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/3/305457.jpg',
            ],
            [
                'name' => 'Kogoro Mouri',
                'email' => 'sleeping_detective@mail.com',
                'password' => 'iamthebest',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/10/441949.jpg',
            ],
            [
                'name' => 'Ai Haibara',
                'email' => 'haibara.iai@outlook.com',
                'password' => 'aptx4869',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/7/305309.jpg',
            ],
            [
                'name' => 'Heiji Hattori',
                'email' => 'heiji.osaka@mail.com',
                'password' => 'kudou_rival',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/8/500027.jpg',
            ],
            [
                'name' => 'Kazuha Toyama',
                'email' => 'kazuhat@example.com',
                'password' => 'aikido_master',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/9/500028.jpg',
            ],
            [
                'name' => 'Sonoko Suzuki',
                'email' => 'sonoko.s@zurich.com',
                'password' => 'richgirl',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/12/315219.jpg',
            ],
            [
                'name' => 'Shuichi Akai',
                'email' => 'akai.fbi@secure.com',
                'password' => 'rye_whiskey',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/2/463525.jpg',
            ],
            [
                'name' => 'Toru Amuro',
                'email' => 'amuro@poirot.com',
                'password' => 'bourbon_zero',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/7/463531.jpg',
            ],
            [
                'name' => 'Kaito Kuroba',
                'email' => 'kid.heist@phantom.com',
                'password' => 'kaitokid1412',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/13/493713.jpg',
            ],
            [
                'name' => 'Juzo Megure',
                'email' => 'megure.tmpd@police.jp',
                'password' => 'inspector01',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/5/433427.jpg',
            ],

            // Bocchi the Rock! characters (10 new entries)
            [
                'name' => 'Hitori Gotoh',
                'email' => 'bocchi@kessoku.com',
                'password' => 'guitar_hero',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/16/511575.jpg',
            ],
            [
                'name' => 'Nijika Ijichi',
                'email' => 'nijika@starline.com',
                'password' => 'starry_manager',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/2/511577.jpg',
            ],
            [
                'name' => 'Ryo Yamada',
                'email' => 'ryo.yamada@bass.com',
                'password' => 'bass_master',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/11/511578.jpg',
            ],
            [
                'name' => 'Ikuyo Kita',
                'email' => 'kita@kessoku.com',
                'password' => 'vocal_shine',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/13/511576.jpg',
            ],
            [
                'name' => 'Seika Ijichi',
                'email' => 'seika@starline.com',
                'password' => 'starry_owner',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/9/511579.jpg',
            ],
            [
                'name' => 'PA-san',
                'email' => 'pa.san@starlight.com',
                'password' => 'sound_engineer',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/12/511582.jpg',
            ],
            [
                'name' => 'Hiroi Kikuri',
                'email' => 'kikuri@sickhack.com',
                'password' => 'drunken_bass',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/4/511580.jpg',
            ],
            [
                'name' => 'Yoyoko Ohtsuki',
                'email' => 'yoyoko@sideros.com',
                'password' => 'rival_guitar',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/10/511584.jpg',
            ],
            [
                'name' => 'Akubi Yoshida',
                'email' => 'akubi@sideros.com',
                'password' => 'sideros_bass',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/14/511585.jpg',
            ],
            [
                'name' => 'Yamada Mother',
                'email' => 'mrs.yamada@family.com',
                'password' => 'ryo_mom',
                'flag' => 'https://flagcdn.com/w640/jp.png',
                'nationality' => 'Japan',
                'image' => 'https://cdn.myanimelist.net/images/characters/3/511589.jpg',
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
                'profile_image' => $user['image'],
                'nationality' => $user['nationality'],
                'bio' => fake()->realText(144),
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
