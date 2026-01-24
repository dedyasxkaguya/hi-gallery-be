<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $appends = ['formattedTime','likeCount','commentCount'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function like(){
        return $this->hasMany(Like::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getFormattedTimeAttribute(){
        return $this->created_at ? $this->created_at->diffForHumans() : '' ;
    }
    public function getLikeCountAttribute(){
        return $this->like()->count();
    }
    public function getCommentCountAttribute(){
        return $this->comment()->count();
    }
}
