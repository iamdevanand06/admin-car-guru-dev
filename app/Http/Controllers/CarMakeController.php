<?php

namespace App\Http\Controllers;

use App\Models\CarBrake;
use App\Models\CarDiamension;
use App\Models\CarEngine;
use App\Models\CarWarranty;
use App\Models\Country;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\CarMake;
use App\Models\Feature;
use Illuminate\Support\Facades\DB;


class CarMakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = CarMake::paginate(20);
        } catch (Exception $e) {
            Log::error('Error::GET_CAR_MAKE_, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            $countries = Country::where('status', '1')->get();
            return view('cars.makes.create', compact('countries'));
        } catch (Exception $e) {
            Log::error('Error::CREATE_CAR_MAKE_, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'brand_id' => 'required|numeric',
            'brand_country' => 'required|integer',
            'model_id' => 'required|numeric',
            'variant_id' => 'required|numeric',
            'brand_emblem' => 'required',
            'transmission' => 'required|string|max:50',
            'fuel_type' => 'required|string|max:50',
            'drive_train' => 'required|alpha',
            'year' => 'required|digits:4|integer',
            'seat' => 'required|integer',
            'exterior_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'interior_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'consumption' => 'required|string|max:50',
            'status' => 'required|integer|in:0,1',

            'engine_cc' => 'required|numeric',
            'engine_type' => 'required|alpha',
            'compression_ratio' => 'required|numeric',
            'peak_power_kw' => 'required|numeric',
            'peak_torque_nm' => 'required|numeric',

            'length_mm' => 'required|numeric',
            'weight_mm' => 'required|numeric',
            'height_mm' => 'required|numeric',
            'wheel_base_mm' => 'required|numeric',
            'kerb_weight_kg' => 'required|numeric',
            'fuel_tank_ltr' => 'required|numeric',

            'brake_front' => 'required|alpha',
            'brake_rear' => 'required|alpha',
            'suspension_front' => 'required|alpha',
            'suspension_back' => 'required|alpha',
            'steering' => 'required|alpha',
            'wheel_type_front' => 'required|alpha',
            'wheel_type_rear' => 'required|alpha',
            'wheel_type_front_rims' => 'required|alpha',
            'wheel_type_rear_rims' => 'required|alpha',
            'features_equipments' => 'required|array',

            'manufacturers_warranty' => 'required|alpha',
            'cargurus_warranty' => 'required|alpha',
            'road_tax_amount_rm' => 'required|numeric',
            'road_tax_year' => 'required|numeric'
        ]);

        DB::beginTransaction();
        try {
            $makeData = $request->only([
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
            ]);
            $makeData['brand_emblem'] = $request->file('brand_emblem')->store('images', 'public');
            $carMake = CarMake::create($makeData);
            $engine = $request->only([
                'engine_cc',
                'engine_type',
                'compression_ratio',
                'peak_power_kw',
                'peak_torque_nm',
            ]);
            $engine['car_makes_id'] = $carMake->id;
            $carEngine = CarEngine::create($engine);
            $dimension = $request->only([
                'length_mm',
                'weight_mm',
                'height_mm',
                'wheel_base_mm',
                'kerb_weight_kg',
                'fuel_tank_ltr',
            ]);
            $dimension['car_engine_id'] = $carEngine->id;
            $carDimension = CarDiamension::create($dimension);
            $brake = $request->only([
                'brake_front',
                'brake_rear',
                'suspension_front',
                'suspension_back',
                'steering',
                'wheel_type_front',
                'wheel_type_rear',
                'wheel_type_front_rims',
                'wheel_type_rear_rims',
            ]);
            $brake['car_diamension_id'] = $carDimension->id;
            $brake['features_equipments'] = json_encode($request->features_equipments);

            $carBrake = CarBrake::create($brake);
            $warranty = $request->only([
                'manufacturers_warranty',
                'cargurus_warranty',
                'road_tax_amount_rm',
                'road_tax_year',
            ]);
            $warranty['car_brake_id'] = $carBrake->id;
            $carWarranty = CarWarranty::create($warranty);

            DB::commit();
            return redirect()->route('carmakes.create')->with('success', 'Car Make Created Successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error::STORE_CAR_MAKE_, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getFeature(Request $request)
    {
        try {
            $search = $request->q;
            $features = Feature::where('feature_name', 'like', "%{$search}%")
                ->get(['id', 'feature_name']);

            // IMPORTANT: match Select2 expected format [{id:..., text:...}]
            return $features->map(function ($item) {
                return [
                    'id' => $item->id,
                    'text' => $item->feature_name
                ];
            });
        } catch (Exception $e) {
            Log::error('Error::FEATURE_SEARCH_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function postFeature(Request $request)
    {
        try {
            $feature = Feature::create([
                'feature_name' => $request->feature_name,
                'status' => '1'
            ]);

            return response()->json([
                'id' => $feature->id,
                'text' => $feature->feature_name
            ]);
        } catch (Exception $e) {
            Log::error('Error::FEATURE_SEARCH_ADD_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }
}
