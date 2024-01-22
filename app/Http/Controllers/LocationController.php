<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class LocationController extends Controller
{
    public function index(){
        $offices=Location::all();
        $regions=Region::all();
        return view('location.index',['offices'=>$offices,'regions'=>$regions]);
    }
    public function store(Request $request)
    {
       // $role_id=Role::all()->where('id',$request->role)->first();
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required',
//            'password' => 'required|confirmed|min:8',
//            'role' => 'required',
//
//        ]);
//        dd($request->name);
//        $user=(new User($request->all(
//            [
//                'name'=>$request->name,
//                'email'=>$request->email,
//                'password'=>Hash::make($request->password),
//                'role'=>$request->role
//            ]
//        )))->save();
        Location::create([
            'district_id'=>$request->district_id,
            'latt'=>$request->latt,
            'lang'=>$request->lang,

        ]);


        return redirect()->route('location.index')
            ->with('success','Успешно Обновлено');



    }
}
