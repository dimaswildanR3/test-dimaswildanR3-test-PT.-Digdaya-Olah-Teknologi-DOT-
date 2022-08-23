<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class CheckController extends Controller
{
 
    public function index()
    {
        $provinces = Province::pluck('name', 'province_id');
        return view('index', compact('provinces'));
    }

   
    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('name', 'city_id');
        return response()->json($city);
    }

    
    

}
