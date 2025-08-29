<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CarBrake;

class CarDiamension extends Model
{
    protected $table = 'car_diamensions';
    protected $fillable = [
        'id',
        'length_mm',
        'weight_mm',
        'height_mm',
        'wheel_base_mm',
        'kerb_weight_kg',
        'fuel_tank_ltr',
        'car_make_id',
        'created_at',
        'updated_at'
    ];

    public function getBrake()
    {
        return $this->hasOne(CarBrake::class, 'car_make_id', 'car_make_id');
    }
}
