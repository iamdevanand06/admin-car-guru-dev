<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CarWarranty;

class CarBrake extends Model
{
    protected $table = 'car_brakes';
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
        'car_make_id',
        'created_at',
        'updated_at'
    ];

    public function getWarranty()
    {
        return $this->hasOne(CarWarranty::class, 'car_make_id', 'car_make_id');
    }
}
