<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CarEngine;
use App\Models\CarInfo;
use App\Models\CarMakeTransmission;
use App\Models\CarMakeDriveTrain;
use App\Models\CarMakeFuelType;
use App\Models\CarMakeMadeYear;
use App\Models\CarMakeSeat;
use App\Models\Country;
use App\Models\CarMakeConsumption;

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
        'start_year',
        'end_year',
        'seat',
        'exterior_color',
        'interior_color',
        'consumption',
        'no_of_door',
        'consumption_value_km_l'
    ];

    public function getCountry()
    {
        return $this->hasOne(Country::class, 'id', 'brand_country');
    }

    public function getConsumption()
    {
        return $this->hasOne(CarMakeConsumption::class, 'id', 'consumption');
    }

    public function getEngine()
    {
        return $this->hasOne(CarEngine::class, 'car_makes_id', 'car_id');
    }

    public function getDiamension()
    {
        return $this->hasOne(CarDiamension::class, 'car_make_id', 'car_id');
    }

    public function getBrake()
    {
        return $this->hasOne(CarBrake::class, 'car_make_id', 'car_id');
    }

    public function getWarranty()
    {
        return $this->hasOne(CarWarranty::class, 'car_make_id', 'car_id');
    }

    public function getVariant()
    {
        return $this->hasOne(Variant::class, 'id', 'variant_id');
    }

    public function getTransmission()
    {
        return $this->hasOne(CarMakeTransmission::class, 'id', 'transmission');
    }

    public function getDriveTrain()
    {
        return $this->hasOne(CarMakeDriveTrain::class, 'id', 'drive_train');
    }

    public function getFuelType()
    {
        return $this->hasOne(CarMakeFuelType::class, 'id', 'fuel_type');
    }

    public function getStartYear()
    {
        return $this->hasOne(CarMakeMadeYear::class, 'id', 'start_year');
    }

    public function getEndYear()
    {
        return $this->hasOne(CarMakeMadeYear::class, 'id', 'end_year');
    }

    public function getSeat()
    {
        return $this->hasOne(CarMakeSeat::class, 'id', 'seat');
    }

    public function getCarInfo()
    {
        return $this->hasOne(CarInfo::class, 'car_id', 'car_id');
    }

    public static function generateCode($prefix = 'M')
    {
        $last = self::orderBy('id', 'desc')->first();

        if (!$last) {
            return $prefix . '00001';
        }

        $number = (int) substr($last->car_id, strlen($prefix));

        return $prefix . str_pad($number + 1, 5, '0', STR_PAD_LEFT);
    }

}
