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
            'title' => 'REFERENCE DATA MANAGEMENT',
            'model' => '',
            'url' => '#',
            'icon' => '',
            'submenu' => [
                ['title' => 'Country', 'model' => '', 'url' => 'country', 'icon' => ''],
                ['title' => 'Currency', 'model' => '', 'url' => 'currency', 'icon' => ''],
                ['title' => 'LANGUAGE', 'model' => '', 'url' => '#', 'icon' => ''],
                ['title' => 'TIME ZONE', 'model' => '', 'url' => '#', 'icon' => ''],
                ['title' => 'UNIT MEASUREMENTS', 'model' => '', 'url' => '#', 'icon' => ''],
                [
                    'title' => 'Drop Down',
                    'model' => '',
                    'url' => '#',
                    'icon' => '',
                    'submenu' => [
                        ['title' => 'Transmission', 'model' => '', 'url' => 'dynamic/dropdown/transmission', 'icon' => ''],
                        ['title' => 'Fuel Type', 'model' => '', 'url' => 'dynamic/dropdown/fuel_type', 'icon' => ''],
                        ['title' => 'Drive Train', 'model' => '', 'url' => 'dynamic/dropdown/drive_train', 'icon' => ''],
                        ['title' => 'Made Year', 'model' => '', 'url' => 'dynamic/dropdown/made_year', 'icon' => ''],
                        ['title' => 'Engine Type', 'model' => '', 'url' => 'dynamic/dropdown/engine_type', 'icon' => ''],
                        ['title' => 'Brake', 'model' => '', 'url' => 'dynamic/dropdown/brake', 'icon' => ''],
                        ['title' => 'Steering', 'model' => '', 'url' => 'dynamic/dropdown/steering', 'icon' => ''],
                        ['title' => 'Seat', 'model' => '', 'url' => 'dynamic/dropdown/make_seat', 'icon' => ''],
                        ['title' => 'Consumption', 'model' => '', 'url' => 'dynamic/dropdown/make_consumption', 'icon' => ''],
                        ['title' => 'Suspension', 'model' => '', 'url' => 'dynamic/dropdown/make_suspension', 'icon' => ''],
                        ['title' => 'Manufacturers Warranty', 'model' => '', 'url' => 'dynamic/dropdown/manufacturers_warranty', 'icon' => ''],
                        ['title' => 'Category', 'model' => '', 'url' => 'dynamic/dropdown/detail_category', 'icon' => ''],
                        ['title' => 'Cargurus Warranty', 'model' => '', 'url' => 'dynamic/dropdown/cargurus_warranty', 'icon' => ''],
                        ['title' => 'Registration Type', 'model' => '', 'url' => 'dynamic/dropdown/registration_type', 'icon' => ''],
                    ],
                ],
            ],
        ],
        [
            'title' => 'CAR MASTER DATA',
            'model' => '',
            'url' => '#',
            'icon' => '',
            'submenu' => [
                ['title' => 'Car Make', 'model' => '', 'url' => 'carmakes/create', 'icon' => ''],
            ],
        ],

        [
            'title' => 'MARKETING',
            'model' => '',
            'url' => '#',
            'icon' => '',
            'submenu' => [
                ['title' => 'Marketing', 'model' => '', 'url' => 'car-marketing/', 'icon' => ''],
            ]
        ],
        ['title' => 'HUMAN CAPITAL', 'model' => '', 'url' => '#', 'icon' => '', 'submenu' => []],
        ['title' => 'FINANCE', 'model' => '', 'url' => '#', 'icon' => '', 'submenu' => []],
        [
            'title' => 'OPERATIONS',
            'model' => '',
            'url' => '#',
            'icon' => '',
            'submenu' => [
                ['title' => 'Car Details', 'model' => '', 'url' => 'car-details/create', 'icon' => ''],
            ]
        ],
        ['title' => 'SALES', 'model' => '', 'url' => '#', 'icon' => '', 'submenu' => []],
        ['title' => 'DEALER MANAGAMENT', 'model' => '', 'url' => '#', 'icon' => '', 'submenu' => []],
        [
            'title' => 'USER MANAGAMENT',
            'model' => '',
            'url' => '#',
            'icon' => '',
            'submenu' => [
                ['title' => 'Users', 'model' => '', 'url' => 'users', 'icon' => ''],
                ['title' => 'Roles', 'model' => '', 'url' => 'roles', 'icon' => ''],
            ]
        ],
    ];
}
