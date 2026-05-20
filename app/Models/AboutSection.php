<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'title',
        'image',
        'position',
        'desc',
        'telegram',
        'tiktok',
        'snapchat',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'phone',
        'email',
        'address',
    ];
}
