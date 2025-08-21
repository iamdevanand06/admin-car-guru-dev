<?php

namespace App\Http\Controllers;

use App\Models\CarDetail;
use Illuminate\Http\Request;
use App\Models\CarInfo;
use App\Models\CarAccident;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\CarMake;

class CarDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $carIds = CarMake::all(['car_id']);
            return view('cars.details.create', compact('carIds'));
        } catch (Exception $e) {
            Log::error('Error::CREATE_CAR_DETAIL_, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'car_id' => 'required',
            'car_info_category' => 'required',
            'car_info_price' => 'required',
            'car_info_location' => 'required',
            'car_info_registration_type' => 'required',
            'car_info_registration_number' => 'required',
            'car_info_registration_date' => 'required',
            'car_info_car_make_year' => 'required',
            'car_info_exterior_color' => 'required',
            'interior_color' => 'required',
            'number_of_keys' => 'required',
            'engine_number' => 'required',
            'chassis_number' => 'required',
            'owner' => 'required',
            'usage' => 'required',
            'car_accident' => 'required',
            'flood_car' => 'required',
            'manufacturers_warranty' => 'required',
            'cargurus_warranty' => 'required',
            'inspector_feedback_comment',
            'carguru_spotlight_header_copy',
            'carguru_spotlight_body_copy',
        ]);

        DB::beginTransaction();
        try {
            $carInfo = $request->only([
                'car_id',
                'car_info_category',
                'car_info_price',
                'car_info_location',
                'car_info_registration_type',
                'car_info_registration_number',
                'car_info_registration_date',
                'car_info_car_make_year',
                'car_info_exterior_color',
                'interior_color',
                'number_of_keys',
                'engine_number',
                'chassis_number',
            ]);
            $info = CarInfo::create($carInfo);

            $carAccident = $request->only([
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
            ]);
            $carAccident['voc_document'] = 'null';//$request->file('voc_document')->store('images', 'public');
            $carAccident['roadtax_document'] = 'null'; //$request->file('roadtax_document')->store('images', 'public');
            $carAccident['picture_of_keys'] = 'null'; //$request->file('picture_of_keys')->store('images', 'public');
            $carAccident['others'] = 'null'; //$request->file('others')->store('images', 'public');
            $carAccident['road_tax_amount'] = '0';
            $carAccident['road_tax_year'] = '0';
            $carAccident['car_info_id'] = $info->id;


            CarAccident::create($carAccident);
            DB::commit();
            return redirect()->route('car-details.create')->with('success', 'Car Details Created Successfully');

        } catch (Exception $e) {
            DB::rollback();
            Log::error('ERROR::CAR_DETAILS_STORE ' . $e->getMessage() . 'Line No: ' . $e->getLine());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
