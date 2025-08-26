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
        'start_year' => ['model' => 'App\Models\CarMakeMadeYear'],
        'end_year' => ['model' => 'App\Models\CarMakeMadeYear'],
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

    const SIDE_MENU_HEAD = [
        [
            'title' => 'REFERENCE DATA MANAGEMENT', 'model' =>'', 'url' => '#', 'icon' => '',
            'submenu' =>[
                ['title' => 'Country', 'model' =>'', 'url' => 'country', 'icon' => ''],
                ['title' => 'Currency', 'model' =>'', 'url' => 'currency', 'icon' => ''],
                ['title' => 'LANGUAGE', 'model' =>'', 'url' => '#', 'icon' => ''],
                ['title' => 'TIME ZONE', 'model' =>'', 'url' => '#', 'icon' => ''],
                ['title' => 'UNIT MEASUREMENTS', 'model' =>'', 'url' => '#', 'icon' => ''],
                ['title' => 'ADDRESS AND GEO', 'model' =>'', 'url' => '#', 'icon' => '',
                    'submenu' => [
                        ['title' => 'ADDRESS REFERENCE', 'model' =>'', 'url' => 'country', 'icon' => ''],
                        ['title' => 'ADDRESS TYPE', 'model' =>'', 'url' => 'currency', 'icon' => ''],
                        ['title' => 'REGION/STATE', 'model' =>'', 'url' => 'country', 'icon' => ''],
                        ['title' => 'CITIES', 'model' =>'', 'url' => 'currency', 'icon' => ''],
                        ['title' => 'SERVICE AREA', 'model' =>'', 'url' => 'currency', 'icon' => ''],
                    ],
                ],
            ],
        ],
        ['title' => 'CAR MASTER DATA', 'model' =>'', 'url' => '#', 'icon' => '' , 'submenu' => []
             'submenu'=> [
                        ['title' => 'ADDRESS REFERENCE', 'model' =>'', 'url' => 'country', 'icon' => ''],
                        ['title' => 'ADDRESS TYPE', 'model' =>'', 'url' => 'currency', 'icon' => ''],
                        ['title' => 'REGION/STATE', 'model' =>'', 'url' => 'country', 'icon' => ''],
                        ['title' => 'CITIES', 'model' =>'', 'url' => 'currency', 'icon' => ''],
                        ['title' => 'SERVICE AREA', 'model' =>'', 'url' => 'currency', 'icon' => ''],
        ]
    ],
        ['title' => 'MARKETING', 'model' =>'', 'url' => '#', 'icon' => '', 'submenu' => []],
        ['title' => 'HUMAN CAPITAL', 'model' =>'', 'url' => '#', 'icon' => '', 'submenu' => [] ],
        ['title' => 'FINANCE', 'model' =>'', 'url' => '#', 'icon' => '', 'submenu' => [] ],
        ['title' => 'OPERATIONS', 'model' =>'', 'url' => '#', 'icon' => '', 'submenu' => [] ],
        ['title' => 'SALES', 'model' =>'', 'url' => '#', 'icon' => '', 'submenu' => [] ],
        ['title' => 'DEALER MANAGAMENT', 'model' =>'', 'url' => '#', 'icon' => '', 'submenu' =>[] ],
        ['title' => 'USER MANAGAMENT', 'model' =>'', 'url' => '#', 'icon' => '', 'submenu' => [] ],
        ];
}
