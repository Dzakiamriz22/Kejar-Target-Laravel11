<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Beasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id', 
        'title', 
        'description', 
        'application_link', 
        'image_url', 
        'expired_date'
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
