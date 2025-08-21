<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CarEngine;
use App\Models\CarInfo;

class CarMake extends Model
{
    protected $table = 'car_makes';
    protected $fillable = [
        'id',
        'car_id',
        'brand_id',
        'brand_country',
        'model_id',
        'variant_id',
        'brand_emblem',
        'transmission',
        'fuel_type',
        'drive_train',
        'year',
        'seat',
        'exterior_color',
        'interior_color',
        'consumption',
    ];

    public function getEngine()
    {
        return $this->hasOne(CarEngine::class, 'car_makes_id', 'car_id');
    }

    public function getCarInfo()
    {
        return $this->hasOne(CarInfo::class, 'car_id', 'car_id');
    }

    public function getVariant()
    {
        return $this->hasOne(Variant::class, 'id', 'variant_id');
    }

    public function getTransmission()
    {
        return $this->hasOne(CarMakeTransmission::class, 'id', 'transmission');
    }
}
