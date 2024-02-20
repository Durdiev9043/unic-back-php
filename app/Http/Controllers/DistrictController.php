<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Region;
use Illuminate\Http\Request;

class DistrictController extends Controller
{

    public function index()
    {
        $districts=District::all();
        $regions=Region::all();
        return view('district.index',['districts'=>$districts,'regions'=>$regions]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        District::create($request->all());
        return redirect()->route('district.index');
    }


    public function show($id)
    {
        //
    }


    public function edit(District $district)
    {
        $regions=Region::all();
        return view('district.edit',['district'=>$district,'regions'=>$regions]);
    }


    public function update(Request $request, District $district)
    {
       if ($request->region_id) {
           $district->update($request->all());
       }elseif (
           $district->update($request->name)
       )
        return redirect()->route('district.index');
    }


    public function destroy(District $district)
    {
        $district->delete();
        return redirect()->route('district.index');
    }
}
