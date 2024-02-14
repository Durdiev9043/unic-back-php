<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DistictUserController extends Controller
{
    public function index(){
        $users=User::where('district_id','>',0)->get();
        $regions=Region::all();
        return view('distirctUser.index',['users'=>$users,'regions'=>$regions]);
    }

    public function store(Request $request)
    {
        $role_id=Role::all()->where('id',$request->role)->first();
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
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
            'region_id'=>$request->region_id,
            'district_id'=>$request->district_id
        ])->assignRole([$role_id]);


        return redirect()->route('user.index')
            ->with('success','Успешно Обновлено');



    }
}
