<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarDiamension extends Model
{
    protected $filable = [
        'id',
        'length_mm',
        'weight_mm',
        'height_mm',
        'wheel_base_mm',
        'kerb_weight_kg',
        'fuel_tank_ltr',
        'car_engine_id',
        'created_at',
        'updated_at'
    ];
}
