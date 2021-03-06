<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_id',
    ];


    protected $hidden = [
        'password',
       // 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


        public function profession()
        {
            return $this->belongsTo(Profession::class);
        }
        

        public function profile()
        {
            return $this->belongsTo(Profile::class);
        }



        public function posts()
        {
            return $this->hasMany(Post::class);
        }

        public function comments()
        {
            return $this->hasManyThrough(Comment::class, Post::class);
        }

}
