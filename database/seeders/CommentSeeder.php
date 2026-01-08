<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = ['nice', 'great', 'wonderful', 'magnifius', 'marveleous', 'love your work', 'your art is very great', 'following rn', 'always a great result'];
        $i = 0;
        while ($i <= 36) {
            foreach ($datas as $data) {
                DB::table('comments')->insert([
                    'user_id' => User::all()->random()->id,
                    'post_id' => Post::all()->random()->id,
                    'comment' => $data,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            };
            $i++;
        }
    }
}
