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
    public function fargona(){
        $fargona=[
            ['name'=>'A.Xolmatov', 'email'=>'A.Xolmatov1@us.uz', 'district_id'=>43, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'L.Usubjonov', 'email'=>'L.Usubjonov1@us.uz', 'district_id'=>43, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'D.Xomidov', 'email'=>'D.Xomidov1@us.uz', 'district_id'=>43, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'D.Habibxo\'jayev', 'email'=>'D.Habibxojayev1@us.uz', 'district_id'=>58, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'A.Abdujabborov', 'email'=>'A.Abdujabborov1@us.uz', 'district_id'=>58, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'U.Ilhomjonov', 'email'=>'U.Ilhomjonov1@us.uz', 'district_id'=>58, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'NasridinovParviz', 'email'=>'NasridinovParviz1@us.uz', 'district_id'=>44, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'A.Ibrohimov', 'email'=>'A.Ibrohimov1@us.uz', 'district_id'=>60, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'TuraboyevMirzoali', 'email'=>'TuraboyevMirzoali1@us.uz', 'district_id'=>44, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'J.Sobirjonov', 'email'=>'J.Sobirjonov1@us.uz', 'district_id'=>60, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'U.Saydaxmedov', 'email'=>'U.Saydaxmedov1@us.uz', 'district_id'=>61, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'XabibullayevIlyosxon', 'email'=>'XabibullayevIlyosxon1@us.uz', 'district_id'=>61, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'A.Abduqodirov', 'email'=>'A.Abduqodirov1@us.uz', 'district_id'=>59, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'A.Eminjonov', 'email'=>'A.Eminjonov1@us.uz', 'district_id'=>45, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'ErgashevShuxratjon', 'email'=>'ErgashevShuxratjon1@us.uz', 'district_id'=>56, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'H.Rajavaliyev', 'email'=>'H.Rajavaliyev1@us.uz', 'district_id'=>45, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'MuxammadjonovShermuhammad', 'email'=>'MuxammadjonovShermuhammad1@us.uz', 'district_id'=>56, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'B.Shukurov', 'email'=>'B.Shukurov1@us.uz', 'district_id'=>46, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'A.O‘ktamov', 'email'=>'A.O‘ktamov1@us.uz', 'district_id'=>55, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'A.Axmedov', 'email'=>'A.Axmedov1@us.uz', 'district_id'=>46, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'К.Тўхтаматов', 'email'=>'К.Тўхтаматов1@us.uz', 'district_id'=>53, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'A.Mahammadjonov', 'email'=>'A.Mahammadjonov1@us.uz', 'district_id'=>49, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'S.Qodirov', 'email'=>'S.Qodirov1@us.uz', 'district_id'=>52, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'S.Sherboboyev', 'email'=>'S.Sherboboyev1@us.uz', 'district_id'=>48, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'A.G‘offurov', 'email'=>'A.G‘offurov1@us.uz', 'district_id'=>57, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'Sh.Qodirov', 'email'=>'Sh.Qodirov1@us.uz', 'district_id'=>57, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'XoshimovAzizbek', 'email'=>'XoshimovAzizbek1@us.uz', 'district_id'=>51, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'X.Umarov', 'email'=>'X.Umarov1@us.uz', 'district_id'=>50, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'YangiboyevJaloliddin', 'email'=>'YangiboyevJaloliddin1@us.uz', 'district_id'=>51, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'I.Nosiraliyev', 'email'=>'I.Nosiraliyev1@us.uz', 'district_id'=>50, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'ArapovAbdulaxad', 'email'=>'ArapovAbdulaxad1@us.uz', 'district_id'=>53, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'XasanboyevAsatillo', 'email'=>'XasanboyevAsatillo1@us.uz', 'district_id'=>56, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'MuxammadakiyevG\'ulomqodir', 'email'=>'MuxammadakiyevGulomqodir1@us.uz', 'district_id'=>55, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'AbduvaliyevInomjon', 'email'=>'AbduvaliyevInomjon1@us.uz', 'district_id'=>55, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'UmirdinovDilxayot', 'email'=>'UmirdinovDilxayot1@us.uz', 'district_id'=>52, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'SobirovMuxammadsiddiq', 'email'=>'SobirovMuxammadsiddiq1@us.uz', 'district_id'=>57, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'NabiyevIlyosbek', 'email'=>'NabiyevIlyosbek1@us.uz', 'district_id'=>49, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'YigitaliyevIqboljon', 'email'=>'YigitaliyevIqboljon1@us.uz', 'district_id'=>49, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'XoshimovAlisher', 'email'=>'XoshimovAlisher1@us.uz', 'district_id'=>49, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'Jo\'rayevIslombek', 'email'=>'JorayevIslombek1@us.uz', 'district_id'=>46, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'Mo\'minjonoHalimjon', 'email'=>'MminjonoHalimjon1@us.uz', 'district_id'=>45, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'HojiyevIzatillo', 'email'=>'HojiyevIzatillo1@us.uz', 'district_id'=>44, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'TursunovAkmaljon', 'email'=>'TursunovAkmaljon1@us.uz', 'district_id'=>50, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'TillaboyevDoniyorjon', 'email'=>'TillaboyevDoniyorjon1@us.uz', 'district_id'=>54, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'MamatqulovSerobjon', 'email'=>'MamatqulovSerobjon1@us.uz', 'district_id'=>54, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'TolibjonovEldorjon', 'email'=>'TolibjonovEldorjon1@us.uz', 'district_id'=>54, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'JamolovRamzbek', 'email'=>'JamolovRamzbek1@us.uz', 'district_id'=>59, 'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'AzimovLazizjon', 'email'=>'AzimovLazizjon1@us.uz', 'district_id'=>47,	'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'TursunovXalimjon', 'email'=>'TursunovXalimjon1@us.uz', 'district_id'=>60,	'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'JamolovAbdurahmon', 'email'=>'JamolovAbdurahmon1@us.uz', 'district_id'=>59,	'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
['name'=>'YusubovTal\'atbek', 'email'=>'YusubovTalatbek1@us.uz', 'district_id'=>61,	'region_id'=>3, 'password'=>bcrypt('tuman'), 'role'=>4],
            ];
        $role_id=Role::all()->where('id',4)->first();
        foreach ($fargona as $data){
            User::create($data)->assignRole([$role_id->id]);
        }
        return redirect()->route('user.index');
    }
}
