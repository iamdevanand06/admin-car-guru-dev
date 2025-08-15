<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarBrake extends Model
{
    protected $fillable = [
        'id',
        'brake_front',
        'brake_rear',
        'suspension_front',
        'suspension_back',
        'steering',
        'wheel_type_front',
        'wheel_type_rear',
        'wheel_type_front_rims',
        'wheel_type_rear_rims',
        'features_equipments',
        'car_diamension_id',
        'created_at',
        'updated_at'
    ];
}
