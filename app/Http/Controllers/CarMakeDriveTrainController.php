<?php

namespace App\Http\Controllers;

use App\Traits\commonTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Models\CarMakeDriveTrain;

class CarMakeDriveTrainController extends Controller
{
    use commonTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all drive trains with pagination
    $data = CarMakeDriveTrain::paginate(20);

    // Return the index view with data
    return view('dynamic.dropdown.driveTrain.index', compact('data'));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dynamic.dropdown.driveTrain.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required|boolean',
        ]);

        try {
            $input = $request->all();
            CarMakeDriveTrain::create($input);
            return redirect()->route('drive_train.index')
                ->with('success', 'Fuel Type created successfully');
        } catch (Exception $e) {
            Log::error('ERROR::STORE_CAR_MAKE_DRIVE_TRAIN ' . $e->getMessage() . ' Line No: ' . $e->getLine());
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
       $driveTrain = CarMakeDriveTrain::findOrFail($id);
    return view('dynamic.dropdown.driveTrain.edit', compact('driveTrain'));
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

    public function getDriveTrain(Request $request)
    {
        try {
            return $this->getDropdownOptions($request->field_id, $request->q);
        } catch (Exception $e) {
            Log::error('Error::CAR_MAKE_DRIVE_TRAIN_SEARCH_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function postDriveTrains(Request $request)
    {
        try {
            $request->validate(['name' => 'required|string|max:255|unique:car_make_drive_trains,name']);
            return $this->postDropdownOptions($request->field_id, $request->name);
        } catch (Exception $e) {
            Log::error('Error::CAR_MAKE_DRIVE_TRAIN_SEARCH_ADD_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }
}
