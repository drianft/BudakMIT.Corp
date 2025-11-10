<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $fillable = [
    'nickname',
    'email',
    'password',
    'roles',
];

    protected $primaryKey = 'user_id';

    public function suratPenawaran()
    {
        return $this->hasMany(SuratPenawaran::class, 'user_id');
    }
}
