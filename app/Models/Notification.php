<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /** @use HasFactory<\Database\Factories\NotificationFactory> */
    use HasFactory;

    protected $casts = ['from'=>'json'];

    protected $appends = ['formattedTime'];
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Post(){
        return $this->belongsTo(Post::class);
    }
    public function getFormattedTimeAttribute(){
        return $this->created_at ? $this->created_at->diffForHumans() : false;
    }
}
