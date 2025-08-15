<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Make;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Models\Feature;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:make-list|make-create|make-edit|make-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:make-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:make-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:make-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $search = $request->input('user-search') ?? '';
            $query = Make::query();
            if (isset($search)) {
                $data = $query->where(function ($query) use ($search) {
                    $query->where('brand_name', 'like', "%{$search}%")
                        ->orWhere('status', 'like', "%{$search}%");
                })->paginate(20);

            } else {
                $data = $query->paginate(20);
            }

            return view('mmv.makes.index', compact('data'))
                ->with('i', ($request->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            Log::error('Error::MAKE_GET_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view('mmv.makes.create');
        } catch (Exception $e) {
            Log::error('Error::MAKE_CREATE_PAGE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'brand_name' => 'required',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|',
                'status' => 'required',
            ]);

            // Store image in storage/app/public/images
            $imagePath = $request->file('logo')->store('images', 'public');

            // Save to database
            Make::create([
                'brand_name' => $request->brand_name,
                'logo' => $imagePath,
                'status' => $request->status
            ]);

            return redirect()->route('makes.index')
                ->with('success', 'Make created successfully');
        } catch (Exception $e) {
            Log::error('Error::MAKE_CREATE_STORE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
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
        try {
            $make = Make::find($id);
            return view('mmv.makes.edit', compact('make'));
        } catch (Exception $e) {
            Log::error('Error::MAKE_EDIT_PAGE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $this->validate($request, [
                'brand_name' => 'required',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|',
                'status' => 'required',
            ]);
            $input = $request->all();
            // Store image in storage/app/public/images
            $imagePath = $request->file('logo')->store('images', 'public');

            // Save to database
            $make = Make::find($id);
            $input['logo'] = $imagePath;
            $make->update($input);

            return redirect()->route('makes.index')
                ->with('success', 'Make Updated successfully');
        } catch (Exception $e) {
            Log::error('Error::MAKE_EDIT_UPDATE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Make::find($id)->delete();
            return redirect()->route('makes.index')
                ->with('success', 'User deleted successfully');
        } catch (Exception $e) {
            Log::error('Error::MAKE_DELETE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function getBrands(Request $request)
    {
        try {
            $search = $request->q;
            $brands = Make::where('brand_name', 'like', "%$search%")->get(['id', 'brand_name']);
            return response()->json($brands);
        } catch (Exception $e) {
            Log::error('Error::MAKE_SEARCH_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function postBrands(Request $request)
    {
        try {
            $request->validate(['brand_name' => 'required|string|max:255|unique:makes,brand_name']);
            $brand = Make::create(['brand_name' => $request->brand_name, 'status' => '1']);
            return response()->json($brand);
        } catch (Exception $e) {
            Log::error('Error::MAKE_SEARCH_ADD_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

}
