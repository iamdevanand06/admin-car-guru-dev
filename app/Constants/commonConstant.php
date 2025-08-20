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
        'brake_front' => ['model' => 'App\Models\CarMakeBrake'],
        'brake_rear' => ['model' => 'App\Models\CarMakeBrake'],
        'suspension_front' => ['model' => 'App\Models\CarMakeSuspension'],
        'suspension_back' => ['model' => 'App\Models\CarMakeSuspension'],
        'steering' => ['model' => 'App\Models\CarMakeSteering'],
        'manufacturers_warranty' => ['model' => 'App\Models\CarMakeManufacturersWarranty'],
        'cargurus_warranty' => ['model' => 'App\Models\CarMakeCarGurusWarranty'],
        'car_info_category' => ['model' => 'App\Models\CarDetailCategory'],
        'car_registration_type' => ['model' => 'App\Models\CarDetailRegistrationType'],
        'car_info_exterior_color' => ['model' => 'App\Models\CarMakeExteriorColor'],
        'usage' => ['model' => 'App\Models\CarDetailUsage'],
    ];

    const COUNTRY_DETAILS_PATH = 'app/public/files/countries_array_completed.json';
}
