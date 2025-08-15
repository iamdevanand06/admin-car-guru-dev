<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarMake extends Model
{
    protected $table = [
        'id',
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
        'created_at',
        'updated_at'
    ];
}
