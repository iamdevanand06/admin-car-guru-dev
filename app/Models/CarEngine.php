<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarEngine extends Model
{
    protected $table = 'car_engines';
    protected $fillable = [
        'id',
        'engine_cc',
        'engine_type',
        'compression_ratio',
        'peak_power_kw',
        'peak_torque_nm',
        'car_makes_id',
        'created_at',
        'updated_at'
    ];
}
