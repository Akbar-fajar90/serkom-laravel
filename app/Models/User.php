<?php
namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 't_admin';
    protected $primaryKey = 'adminID';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed', 
        ];
    }

    public function getNameAttribute(): string
    {
        return $this->username ?? 'Admin';
    }

    public function getRememberTokenName()
    {
        return null;
    }
}