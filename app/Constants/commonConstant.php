<?php

namespace App\Constants;

class commonConstant
{
    const ACTIVE = 1;
    const INACTIVE = 0;

    const CAR_MAKE_DROPDOWN_MODEL = [
        'transmission' => ['model' => 'App\Models\CarMakeTransmission'],
        'fuel_type' => ['model' => 'App\Models\CarMakeFuelType'],
        'drive_train' => ['model' => 'App\Models\CarMakeDriveTrain'],
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
                ['title' => 'Car Make', 'model' => '', 'url' => 'carmakes', 'icon' => ''],
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
                ['title' => 'Car Details', 'model' => '', 'url' => 'car-details', 'icon' => ''],
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

    const CAR_MAKE_RELATIONSHIP_INDEX = ['getEngine', 'getVariant', 'getStartYear', 'getTransmission', 'getDriveTrain', 'getFuelType'];
    const CAR_MAKE_RELATIONSHIP_SHOW = ['getCountry', 'getEngine', 'getDiamension', 'getBrake', 'getWarranty', 'getEngine', 'getVariant', 'getTransmission', 'getDriveTrain', 'getFuelType', 'getStartYear', 'getEndYear', 'getSeat'];

    const CAR_DETAIL_RELATIONSHIP_INDEX = ['getCarDetailAccident', 'getCarDetailCategory', 'getVariant'];

    const CAR_DETAIL_RELATIONSHIP_SHOW = ['getCarDetailAccident', 'getRegistrationType', 'getCarDetailCategory', 'getVariant'];

    const CAR_MAKE_RESET_FIELDS = [
        "brand_country",
        "brand_id",
        "model_id",
        "start_year",
        "end_year",
        "variant_id",
        "transmission",
        "drive_train",
        "fuel_type",
        "no_of_door",
        "seat",
        "consumption",
        "consumption_value_km_l",
        "engine_cc",
        "engine_type",
        "compression_ratio",
        "peak_power_kw",
        "peak_torque_nm",
        "length_mm",
        "weight_mm",
        "height_mm",
        "wheel_base_mm",
        "kerb_weight_kg",
        "fuel_tank_ltr",
        "brake_front",
        "brake_rear",
        "suspension_front",
        "suspension_back",
        "steering",
        "wheel_type_front",
        "wheel_type_rear",
        "wheel_type_front_rims",
        "wheel_type_rear_rims",
        "features_equipments",
        "manufacturers_warranty",
        "cargurus_warranty",
        "road_tax_amount_rm"
    ];

    const CAR_DETAIL_RESET_FIELDS = [
        'car_detail_id',
        'car_info_category',
        'car_info_price',
        'car_info_location',
        'brand_id',
        'model_id',
        'variant_id',
        'car_info_fuel_type',
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
