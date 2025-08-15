<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarWarranty extends Model
{
    protected $fillable = [
        'id',
        'manufacturers_warranty',
        'cargurus_warranty',
        'road_tax_amount_rm',
        'road_tax_year',
        'car_brake_id',
        'created_at',
        'updated_at',
    ];
}
