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
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password) {

        $this->attributes['password'] = bcrypt($password);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

//    public function xp()
//    {
//        return $this->quizzes()->sum('score');
//    }

    public static function orderByXp()
    {
        $user = User::whereHas('quizzes', function($query){
            $query->where('score', '>', '0');
        })->withCount('quizzes')->withSum('quizzes', 'score')->orderBy('quizzes_sum_score', 'desc');
        return $user;

    }

}
