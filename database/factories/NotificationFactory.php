<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $i = mt_rand(0, 2);
        $body = ['Following You', 'Like your post', 'Comment on your post'];
        $type = ['FOLLOW', 'LIKE', 'COMMENT'];

        return [
            'user_id' => User::all()->random()->id,
            'from' => json_decode(User::all()->random()),
            'post_id' => $type[$i] == 'COMMENT' || $type[$i] == 'LIKE' ? Post::all()->random()->id : null,
            'comment' => $type[$i] == 'COMMENT' ? fake()->realText(24) : null, 
            'type' => $type[$i],
            'body' => $body[$i],
        ];
    }
}
