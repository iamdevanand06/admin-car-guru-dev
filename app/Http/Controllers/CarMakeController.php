<?php

namespace App\Http\Controllers;

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
        try {
            $this->validate($request, [
                //Car Makes
                'brand_id' => 'required|numeric',
                'brand_country' => 'required|integer',
                'model_id' => 'required|numeric',
                'variant_id' => 'required|numeric',
                // 'brand_emblem' => 'required',
                'transmission' => 'required|alpha',
                'fuel_type' => 'required|alpha',
                'drive_train' => 'required|alpha',
                'year' => 'required|digits:4|integer',
                'seat' => 'required|integer',
                'exterior_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
                'interior_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
                'consumption' => 'required|alpha',
                'status' => 'required|integer|in:0,1',
                // //Car Engine
                // 'engine_cc' => 'required|numeric',
                // 'engine_type' => 'required|alpha',
                // 'compression_ratio' => 'required|numeric',
                // 'peak_power_kw' => 'required|numeric',
                // 'peak_torque_nm' => 'required|numeric',
                // // Dimension
                // 'length_mm' => 'required|numeric',
                // 'weight_mm' => 'required|numeric',
                // 'height_mm' => 'required|numeric',
                // 'wheel_base_mm' => 'required|numeric',
                // 'kerb_weight_kg' => 'required|numeric',
                // 'fuel_tank_ltr' => 'required|numeric',
                // // Brake
                // 'brake_front' => 'required|alpha',
                // 'brake_rear' => 'required|alpha',
                // 'suspension_front' => 'required|alpha',
                // 'suspension_back' => 'required|alpha',
                // 'steering' => 'required|alpha',
                // 'wheel_type_front' => 'required|alpha',
                // 'wheel_type_rear' => 'required|alpha',
                // 'wheel_type_front_rims' => 'required|alpha',
                // 'wheel_type_rear_rims' => 'required|alpha',
                // 'features_equipments' => 'required|array',
                // // Warranty
                // 'manufacturers_warranty' => 'required|alpha',
                // 'cargurus_warranty' => 'required|alpha',
                // 'road_tax_amount_rm' => 'required|numeric',
                // 'road_tax_year' => 'required|numeric'
            ]);
            DB::beginTransaction();
            $input = $request->all();

            $carMake = CarMake::create($input);

            dd($carMake);

            DB::commit();
            return redirect()->route('carmakes.create')
                ->with('success', 'Car Make created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error::POST_CAR_MAKE_, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
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
