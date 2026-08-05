<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 't_admin';
    protected $primaryKey = 'adminID';
    public $timestamps = false;

    protected $fillable =[
        'username',
        'email',
        'password',
    ];

    protected $hidden =[
        'password',

    ];

    protected function cast(): array
    {
        return[
            'created_at'=>'timestamp',
            'password'=>'hashed',
        ];
    }

    public function getNameAttribute(): string
    {
        return $this->nama ?? $this->username ?? 'Admin';
    }

    public function getRememberTokenName(){
        return null;
    }
}
