<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Advertisement;

class AdvertismentController extends Controller
{

    public function index(Request $request)
    {
        try {
            $data = Advertisement::with('getAdPlacement', 'getAdTopic')->paginate(20);
            $ads = $data->unique('banner_id')->map(function ($item) {
                $ads = Advertisement::where('banner_id', $item->banner_id)->first('set');
                return (object) [
                    'ad_placement' => $item->getAdPlacement->name,
                    'ad_topic' => $item->ad_topic,
                    'status' => $item->status,
                    'count' => count(json_decode($ads->set, true)),
                ];
            })->values();
            return view('marketing.advertisment-promotion.index', compact('data', 'ads'))->with('i', ($request->input('page', 1) - 1) * 5);
        } catch (Exception $e) {
            Log::error('Error::CAR_MARKAETING_Advertisement_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function create()
    {
        try {
            return view('marketing.advertisment-promotion.create');
        } catch (Exception $e) {
            Log::error('Error::CAR_MARKAETING_Advertisement_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'banner_id' => 'required',
            'set' => 'required',
            'ad_placement' => 'required',
            'ad_topic' => 'required|unique:advertisements,ad_topic',
            'status' => 'required',
        ]);
        try {

            $sets = $request->set;
            $set = [];

            foreach ($sets as $index => $setData) {
                $set[$index]['banner_web'] = $setData['banner_web']->store('images', 'public');
                $set[$index]['banner_mob'] = $setData['banner_mob']->store('images', 'public');
                $set[$index]['banner_url'] = $setData['banner_url'] ?? '';
            }

            $input['banner_id'] = $request->banner_id;
            $input['ad_placement'] = $request->ad_placement;
            $input['ad_topic'] = $request->ad_topic;
            $input['status'] = $request->status;
            $input['set'] = json_encode($set);

            $data = Advertisement::create($input);
            $response = [
                'topic' => $data->ad_topic,
                'message' => 'Banner Insert Sucessfully'
            ];
            return $response;
        } catch (Exception $e) {
            Log::error('Error::ADS_GET_STORE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function edit()
    {
        try {
            return view('marketing.advertisment-promotion.edit');
        } catch (Exception $e) {
            Log::error('Error::CAR_MARKAETING_Advertisement_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function getBannerById(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        try {
            $data = Advertisement::where('id', $request->id)->first();
            return $data;
        } catch (Exception $e) {
            Log::error('Error::CAR_MARKAETING_Advertisement_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }


    public function getBanner(Request $request)
    {
        try {
            $data = Advertisement::select('banner_web', 'banner_mob')->where('set', $request->set)->first();

            return json_encode($data);
        } catch (Exception $e) {
            Log::error('Error::ADS_GET_STORE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function preview(Request $request)
    {
        try {
            $data = Advertisement::where('banner_id', $request->baner_id)->first();
        } catch (Exception $e) {
            Log::error('Error::ADS_GET_STORE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function destroy(Request $request)
    {
        try {

        } catch (Exception $e) {
            Log::error('Error::ADS_GET_STORE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }

    }

}
