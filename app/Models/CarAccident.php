<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarAccident extends Model
{
    protected $fillable = [
        'id',
        'car_info_id',
        'owner',
        'usage',
        'car_accident',
        'flood_car',
        'manufacturers_warranty',
        'cargurus_warranty',
        'road_tax_amount',
        'road_tax_year',
        'inspector_feedback_comment',
        'carguru_spotlight_header_copy',
        'carguru_spotlight_body_copy',
        'voc_document',
        'roadtax_document',
        'picture_of_keys',
        'others'
    ];
}
