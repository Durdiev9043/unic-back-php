<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        $users=User::all();
        $role=Role::all();
        $regions=Region::all();

        return view('user.index',['users'=>$users,'role'=>$role,'regions'=>$regions]);
    }


    public function create()
    {
        //
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
            'role'=>$request->role
        ])->assignRole([$role_id]);


            return redirect()->route('user.index')
                ->with('success','Успешно Обновлено');



    }


    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
        $regions=Region::all();

        return view('distirctUser.edit',['user'=>$user,'regions'=>$regions]);
    }


    public function update(Request $request, User $user)
    {
        $region_id=$user->region_id;
        $district_id=$user->district_id;

            $user->update($request->all());

            return redirect()->route('user.index');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
