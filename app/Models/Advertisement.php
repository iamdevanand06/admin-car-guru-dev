<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    //  use HasFactory;

    // Table name (optional if it matches 'advertisements')
    protected $table = 'advertisements';

    // Fillable fields - database column names
    protected $fillable = [
        'banner_id',
        'set',
        'banner_web',
        'banner_mob',
        'location',
        'status'
    ];
}
