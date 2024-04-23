<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'avatar',
        'img-background',
        'videos',
        'photos',
        'post',
        'since',
        'email',
    ];


    public function friends()
    {
        return $this->hasMany(Friend::class, 'user_id');
    }
}
