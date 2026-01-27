<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'image'=>'post-images/image(1).jpg'
            ],
            [
                'image'=>'post-images/image(2).jpg'
            ],
            [
                'image'=>'post-images/image(3).jpg'
            ],
            [
                'image'=>'post-images/image(4).jpg'
            ],
            [
                'image'=>'post-images/image(5).jpg'
            ],
            [
                'image'=>'post-images/image(6).jpg'
            ],
            [
                'image'=>'post-images/image(7).jpg'
            ],
            [
                'image'=>'post-images/image(8).jpg'
            ],
            [
                'image'=>'post-images/image(9).jpg'
            ],
            [
                'image'=>'post-images/image(10).jpg'
            ],
            [
                'image'=>'post-images/image(11).jpg'
            ],
            [
                'image'=>'post-images/image(12).jpg'
            ],
            [
                'image'=>'post-images/image(13).jpg'
            ],
            [
                'image'=>'post-images/image(14).jpg'
            ],
            [
                'image'=>'post-images/image(15).jpg'
            ],
            [
                'image'=>'post-images/image(16).jpg'
            ],
            [
                'image'=>'post-images/image(17).jpg'
            ],
            [
                'image'=>'post-images/image(18).jpg'
            ],
            [
                'image'=>'post-images/image(19).jpg'
            ],
            [
                'image'=>'post-images/image(20).jpg'
            ],
            [
                'image'=>'post-images/image(21).jpg'
            ],
            [
                'image'=>'post-images/image(22).jpg'
            ],
            [
                'image'=>'post-images/image(23).jpg'
            ],
            [
                'image'=>'post-images/image(24).jpg'
            ],
            [
                'image'=>'post-images/image(25).jpg'
            ],
            [
                'image'=>'post-images/image(26).jpg'
            ],
            [
                'image'=>'post-images/image(27).jpg'
            ],
            [
                'image'=>'post-images/image(28).jpg'
            ],
            [
                'image'=>'post-images/image(29).jpg'
            ],
            [
                'image'=>'post-images/image(30).jpg'
            ],
            [
                'image'=>'post-images/image(31).jpg'
            ],
            [
                'image'=>'post-images/image(32).jpg'
            ],
        ];
        foreach($posts as $post){
            DB::table('posts')->insert([
                'user_id'=>User::all()->random()->id,
                'category_id'=>Category::all()->random()->id,
                'image'=>$post['image'],
                'slug'=>Str::random(16),
                'title'=>fake()->realText(72),
                'caption'=>fake()->realText( 256),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
