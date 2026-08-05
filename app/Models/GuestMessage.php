<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestMessage extends Model
{
    protected $table = 't_user';

    protected $primaryKey = 'userID';
    public $timestamps = true;

    protected $fillable = [
        'username',
        'email',
        'pesan',
    ];
}
