<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $appends = ['postCount','commentCount','LikeCount','followingCount','followerCount'];
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function post(){
        return $this->hasMany(Post::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function like(){
        return $this->hasMany(Like::class);
    }
    public function getPostCountAttribute(){
        return $this->post()->count();
    }
    public function getLikeCountAttribute(){
        return $this->like()->count();
    }
    public function getCommentCountAttribute(){
        return $this->comment()->count();
    }
    public function following(){
        return $this->belongsToMany(User::class,'follows','user_id','following_id');
    }
    public function followers(){
        return $this->belongsToMany(User::class,'follows','following_id','user_id');
    }
    public function getFollowingCountAttribute(){
        return $this->following()->count();
    }
    public function getFollowerCountAttribute(){
        return $this->followers()->count();
    }
}
