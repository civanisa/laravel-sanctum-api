<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CagriMerkezi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'phone',
        'web-site',
        'social-media-1',
        'social-media-2',
        'image',
        'icon'
    ];
}
