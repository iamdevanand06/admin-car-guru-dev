<?php

namespace App\Constants;

class commonConstant
{
    const ACTIVE = 1;
    const INACTIVE = 0;

    const CAR_MAKE_DROPDOWN_MODEL = [
        'transmission' => ['model' => 'App\Models\CarMakeTransmission'],
        'fuel_type' => ['model' => 'App\Models\CarMakeFuelType'],
        'drive_train' => ['model' => 'App\Models\CarMakeDriveTrains'],
        'year' => ['model' => 'App\Models\CarMakeMadeYear'],
        'seat' => ['model' => 'App\Models\CarMakeSeat'],
        'exterior_color' => ['model' => 'App\Models\CarMakeExteriorColor'],
        'interior_color' => ['model' => 'App\Models\CarMakeInteriorColor'],
        'consumption' => ['model' => 'App\Models\CarMakeConsumption'],
        'engine_type' => ['model' => 'App\Models\CarMakeEngineType'],
        'engine_cc' => ['model' => 'App\Models\CarMakeMadeYear'],
    ];

    const COUNTRY_DETAILS_PATH = 'app/public/files/countries_array_completed.json';
}
