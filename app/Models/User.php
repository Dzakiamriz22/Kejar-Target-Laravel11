<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'phone_number',
        'isAdmin',
    ];

    public function beasiswas()
    {
        return $this->hasMany(Beasiswa::class, 'admin_id');
    }
}
