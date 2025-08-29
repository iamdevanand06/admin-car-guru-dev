<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisment;

   
class AdvertismentController extends Controller
{
 
    public function index()
    {
        try {
                return view('advertisment.advertisment');
        } catch (Exception $e) {
            Log::error('Error::ADS_GET_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

public function store(Request $request)
{  
    $this->validate($request, [
                'banner_id' => 'required',
               'set' => 'required',
                'status' => 'required',
            ]);
           
     try {
           $input = $request->all();
           $input['banner_web'] = $request->file('banner_web')->store('images', 'public');
        $input['banner_mob'] = $request->file('banner_mob')->store('images', 'public');
       
            $data = Advertisment::create($input);
            $response = [
               'set'=> $data->set,
                'message'=>'banner insert sucessfully'
            ];
            return $response;
        } catch (Exception $e) {
            Log::error('Error::ADS_GET_STORE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
}


public function getBanner(Request $request)
{
    try{
        $data = Advertisment::select('banner_web','banner_mob')->where('set',$request->set)->first();

        return json_encode($data);
    }
     catch(Exception $e){
     Log::error('Error::ADS_GET_STORE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
    }
}

public function preview(Request $request) 
{
    try{
       $data = Advertisment::where('banner_id',$request->baner_id)->first();
    }
    catch(Exception $e){
     Log::error('Error::ADS_GET_STORE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
    }
}

public function destroy(Request $request)
{
    try{
     Advertisment::find(id)->delete();
     return redirect()->route()
              ->with('success', 'User deleted successfully');
    }
     catch(Exception $e){
     Log::error('Error::ADS_GET_STORE, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
    }

}

}
