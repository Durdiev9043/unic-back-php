<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function region(Request $request){
        $district=District::all()->where('region_id','=',$request->region);
        return $district;
    }
}
