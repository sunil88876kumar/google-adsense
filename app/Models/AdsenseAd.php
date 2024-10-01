<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsenseAd extends Model
{
    use HasFactory;

    protected $table = 'adsense_ads';

    protected $fillable = [
        'status',
        'code',
        'type',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
