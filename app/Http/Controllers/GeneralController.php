<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class GeneralController extends Controller
{
    public function region(Request $request){
        $district=District::all()->where('region_id','=',$request->region);
        return $district;
    }
    public function buxoro(){
        $buxoro=[
            ['name'=>'A.Ramazonov', 'email'=>'A.Ramazonov1@us.uz', 'district_id'=>42, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'B.Muxsinov', 'email'=>'B.Muxsinov1@us.uz', 'district_id'=>42, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'M.Yunusov', 'email'=>'M.Yunusov1@us.uz', 'district_id'=>41, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'M.Sadirov', 'email'=>'M.Sadirov1@us.uz', 'district_id'=>40, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'O.Ochilov', 'email'=>'O.Ochilov1@us.uz', 'district_id'=>39, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'O.Hamidov', 'email'=>'O.Hamidov1@us.uz', 'district_id'=>39, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'S.Salimov', 'email'=>'S.Salimov1@us.uz', 'district_id'=>38, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'X.Murodov', 'email'=>'X.Murodov1@us.uz', 'district_id'=>38, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'N.N.Qahramonov', 'email'=>'N.N.Qahramonov1@us.uz', 'district_id'=>37, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'A.Xayrillayev', 'email'=>'A.Xayrillayev1@us.uz', 'district_id'=>37, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'O.Abdulloyev', 'email'=>'O.Abdulloyev1@us.uz', 'district_id'=>36, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'S.Yo‘ldoshev', 'email'=>'S.Yo‘ldoshev1@us.uz', 'district_id'=>36, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'U.Ismoilov', 'email'=>'U.Ismoilov1@us.uz', 'district_id'=>35, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'D.Yusubjonov', 'email'=>'D.Yusubjonov1@us.uz', 'district_id'=>35, 'region_id'	=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'B.Muhammadiyev', 'email'=>'B.Muhammadiyev1@us.uz', 'district_id'=>34, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'S.Habibov', 'email'=>'S.Habibov1@us.uz', 'district_id'=>34, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'M.Ziyodulloyev', 'email'=>'M.Ziyodulloyev1@us.uz', 'district_id'=>34, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'S.Jalilov', 'email'=>'S.Jalilov1@us.uz', 'district_id'=>33, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'B.Saidov', 'email'=>'B.Saidov1@us.uz', 'district_id'=>33, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'Z.Zaripov', 'email'=>'Z.Zaripov1@us.uz', 'district_id'=>33, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'S.Isomov', 'email'=>'S.Isomov1@us.uz', 'district_id'=>32, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'R.Nurmatov', 'email'=>'R.Nurmatov1@us.uz', 'district_id'=>32, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'Y.Shomurodov', 'email'=>'Y.Shomurodov1@us.uz', 'district_id'=>32, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'F.Boltayev', 'email'=>'F.Boltayev1@us.uz', 'district_id'=>32, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'X.Rajabov', 'email'=>'X.Rajabov1@us.uz', 'district_id'=>30, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'ShokirovSherzod', 'email'=>'ShokirovSherzod1@us.uz', 'district_id'=>42, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'QurbonmurodovYoqub', 'email'=>'QurbonmurodovYoqub1@us.uz', 'district_id'=>35, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'AxmadovOzodbek', 'email'=>'AxmadovOzodbek1@us.uz', 'district_id'=>40, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'AxatovBekzod', 'email'=>'AxatovBekzod1@us.uz', 'district_id'=>40, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'KarimovRahim', 'email'=>'KarimovRahim1@us.uz', 'district_id'=>31, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'RajabovZuhriddin', 'email'=>'RajabovZuhriddin1@us.uz', 'district_id'=>30, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'RaximovDilshodbek', 'email'=>'RaximovDilshodbek1@us.uz', 'district_id'=>36, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'AbdurahmonovSherzod', 'email'=>'AbdurahmonovSherzod1@us.uz', 'district_id'=>37, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'XamroyevAxmad', 'email'=>'XamroyevAxmad1@us.uz', 'district_id'=>41, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'RoziqovAzizbek', 'email'=>'RoziqovAzizbek1@us.uz', 'district_id'=>41, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'SharipovMamasharif', 'email'=>'SharipovMamasharif1@us.uz', 'district_id'=>32, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'RajabovSunnatillo', 'email'=>'RajabovSunnatillo1@us.uz', 'district_id'=>33, 'region_id'=>2, 'password'=>bcrypt('tuman'), 'role'=>4],

        ];
        $role_id=Role::all()->where('id',4)->first();
        foreach ($buxoro as $data){
            User::create($data)->assignRole([$role_id->id]);
        }
        return redirect()->route('user.index');
    }
}
