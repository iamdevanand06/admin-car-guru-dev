<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\CarDetailCategory;

class CarInfo extends Model
{
    protected $fillable = [
        'id',
        'car_id',
        'car_info_category',
        'car_info_price',
        'car_info_location',
        'car_info_registration_type',
        'car_info_registration_number',
        'car_info_registration_date',
        'car_info_car_make_year',
        'car_info_exterior_color',
        'interior_color',
        'number_of_keys',
        'engine_number',
        'chassis_number',
        'mileage',
    ];

    public function getCarDetailCategory()
    {
        return $this->hasOne(CarDetailCategory::class, 'id', 'car_info_category');
    }
}
