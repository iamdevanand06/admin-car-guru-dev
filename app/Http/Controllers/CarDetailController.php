<?php

namespace App\Http\Controllers;

use App\Constants\commonConstant;
use App\Models\CarDetail;
use App\Models\CarEngine;
use Illuminate\Http\Request;
use App\Models\CarInfo;
use App\Models\CarAccident;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\CarMake;
use App\Models\Country;

class CarDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $data = CarInfo::with(commonConstant::CAR_DETAIL_RELATIONSHIP_INDEX)->paginate(20);
            // dd($data);
            return view('operations.details.index', compact('data'))
                ->with('i', ($request->input('page', 1) - 1) * 20);
        } catch (Exception $e) {
            Log::error('Error::CREATE_CAR_DETAIL_INDEX, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $countries = Country::where('status', commonConstant::ACTIVE)->get();
            return view('operations.details.create', compact('countries'));
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
            'car_detail_id' => 'required',
            'car_info_category' => 'required',
            'car_info_price' => 'required',
            'car_info_location' => 'required',
            'brand_id' => 'required',
            'model_id' => 'required',
            'variant_id' => 'required',
            'car_info_fuel_type' => 'required',
            'car_info_registration_type' => 'required',
            'car_info_registration_number' => 'required',
            'car_info_registration_date' => 'required',
            'car_info_car_make_year' => 'required',
            'car_info_exterior_color' => 'required',
            'interior_color' => 'required',
            'number_of_keys' => 'required',
            'mileage' => 'required',
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
            $carAccident['voc_document'] = $request->file('voc_document') ? $request->file('voc_document')->store('images', 'public') : 'null';//$request->file('voc_document')->store('images', 'public');
            $carAccident['roadtax_document'] = $request->file('roadtax_document') ? $request->file('roadtax_document')->store('images', 'public') : 'null'; //$request->file('roadtax_document')->store('images', 'public');
            $carAccident['picture_of_keys'] = $request->file('picture_of_keys') ? $request->file('picture_of_keys')->store('images', 'public') : 'null'; //$request->file('picture_of_keys')->store('images', 'public');
            $carAccident['others'] = $request->file('others') ? $request->file('others')->store('images', 'public') : 'null'; //$request->file('others')->store('images', 'public');
            $carAccident['road_tax_amount'] = '0';
            $carAccident['road_tax_year'] = '0';
            $carAccident['car_detail_id'] = $info->car_detail_id;


            CarAccident::create($carAccident);
            DB::commit();
            return redirect()->route('car-details.index')->with('success', 'Car Details Created Successfully');

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
    public function edit(Request $request, string $id)
    {
        try {
            $carDetail = CarInfo::with(commonConstant::CAR_DETAIL_RELATIONSHIP_SHOW)->findOrFail($id);
            $countries = Country::where('status', commonConstant::ACTIVE)->get();
            $carAccident = CarAccident::where('car_detail_id', $carDetail->car_detail_id)->first();
            return view('operations.details.edit', compact('carDetail', 'carAccident', 'countries'));
        } catch (Exception $e) {
            Log::error('Error::EDIT_CAR_DETAIL, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'car_detail_id' => 'required',
            'car_info_category' => 'required',
            'car_info_price' => 'required',
            'car_info_location' => 'required',
            'brand_id' => 'required',
            'model_id' => 'required',
            'variant_id' => 'required',
            'car_info_fuel_type' => 'required',
            'car_info_registration_type' => 'required',
            'car_info_registration_number' => 'required',
            'car_info_registration_date' => 'required',
            'car_info_car_make_year' => 'required',
            'car_info_exterior_color' => 'required',
            'interior_color' => 'required',
            'number_of_keys' => 'required',
            'mileage' => 'required',
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
            $carInfoUpdate = $request->only([
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
            ]);
            $infoUpdate = CarInfo::findOrFail($id);
            $infoUpdate->update($carInfoUpdate);

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
            $carAccident['voc_document'] = $request->file('voc_document') ? $request->file('voc_document')->store('images', 'public') : 'null';//$request->file('voc_document')->store('images', 'public');
            $carAccident['roadtax_document'] = $request->file('roadtax_document') ? $request->file('roadtax_document')->store('images', 'public') : 'null'; //$request->file('roadtax_document')->store('images', 'public');
            $carAccident['picture_of_keys'] = $request->file('picture_of_keys') ? $request->file('picture_of_keys')->store('images', 'public') : 'null'; //$request->file('picture_of_keys')->store('images', 'public');
            $carAccident['others'] = $request->file('others') ? $request->file('others')->store('images', 'public') : 'null'; //$request->file('others')->store('images', 'public');
            $carAccident['road_tax_amount'] = '0';
            $carAccident['road_tax_year'] = '0';

            CarAccident::where('car_detail_id', $infoUpdate->car_detail_id)->update($carAccident);
            DB::commit();
            return redirect()->route('car-details.index')->with('success', 'Car Details Update Successfully');

        } catch (Exception $e) {
            DB::rollback();
            Log::error('ERROR::CAR_DETAILS_UPDATE ' . $e->getMessage() . 'Line No: ' . $e->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
