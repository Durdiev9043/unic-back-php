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


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
