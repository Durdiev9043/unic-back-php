<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Daily;
use App\Models\District;
use App\Models\Location;
use App\Models\Region;
use App\Models\Task;
use App\Models\TaskType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GeneralController extends BaseController
{
    public function today($id){
        $user=User::where('id',$id)->first();
        $msg=$user->name.'ning bugungi qilgan ishlari';
        $today=Carbon::today();
        $tasks=Task::where('user_id',$id)->whereDate('created_at', Carbon::today())->get();
        return $this->sendSuccess($tasks,$msg);
    }
    public function yesterday($id){
        $user=User::where('id',$id)->first();
        $msg=$user->name.'ning kechagi qilgan ishlari';
        $tasks=Task::where('user_id',$id)->whereDate('created_at', Carbon::yesterday())->get();
        return $this->sendSuccess($tasks,$msg);
    }
    public function type(){
        $types=TaskType::all();
        return $this->sendSuccess($types,'task types');
    }
    public function thisweek($id){
        $user=User::where('id',$id)->first();
        $msg=$user->name.'ning bu haftada qilgan ishlari';
        $today=Carbon::today();
        $tasks=Task::where('user_id',$id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        return $this->sendSuccess($tasks,$msg);
    }
    public function home($id){
        $today= count(Task::where('user_id',$id)->whereDate('created_at', Carbon::today())->get());
        $yesterday= count(Task::where('user_id',$id)->whereDate('created_at', Carbon::yesterday())->get());
        $thisweek=count(Task::where('user_id',$id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get());
        $farqi=$today-$yesterday;
        $data=['today'=>$today,'yesterday'=>$yesterday,'farqi'=>$farqi,'thisweek'=>$thisweek];
        return $this->sendSuccess($data,'Bosh sahifa');
    }
    public function info($id){
        $user=User::where('id',$id)->first();
        return $this->sendSuccess($user,'Foydalanuvchi haqida ma\'lumotlar');
    }
    public function radius(Request $request,$id)
    {
        $user = User::where('id', $id)->first();
        $latitude1 = $request->latt;
        $longitude1 = $request->lang;
        $latitude2 = Location::where('district_id', $user->district_id)->first()->latt;
        $longitude2 = Location::where('district_id', $user->district_id)->first()->lang;
        if (($latitude1 == $latitude2) && ($longitude1 == $longitude2)) {
            return 0;
        } // distance is zero because they're the same point

        $p1 = deg2rad($latitude1);
        $p2 = deg2rad($latitude2);

        $dp = deg2rad($latitude2 - $latitude1);
        $dl = deg2rad($longitude2 - $longitude1);

        $a = (sin($dp / 2) * sin($dp / 2)) + (cos($p1) * cos($p2) * sin($dl / 2) * sin($dl / 2));
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $r = 6371008; // Earth's average radius, in meters
        $d = $r * $c;

        if ($d <= 150) {
            $data = Daily::create([
                'user_id' => $id,
                'latt' => $request->latt,
                'lang' => $request->lang,
                'day' => Carbon::today(),
                'time' => $request->time,
            ]);
            if ($data) {
                return $this->sendSuccess($d, 'Siz ishga yetib keldingiz'); // distance, in meters
            }
        } else {
            return $this->sendSuccess($d, 'Siz manzilga yetib bormagansiz'); // distance, in meters
        }
    }

    public function boss(){
//        $x=DB::table('users')
//            ->select('users.id', 'users.region_id','tasks.created_at', 'tasks.id as id')
//            ->join('tasks', 'users.id', '=', 'tasks.user_id')
//            ->where('region_id',13)->get();

        $regions=Region::all();
        $atvet=[];
        foreach ($regions as $region){
           $xx=DB::table('users')
               ->select('users.id', 'users.region_id','tasks.created_at', 'tasks.id as id')
               ->join('tasks', 'users.id', '=', 'tasks.user_id')
               ->where('region_id',$region->id)->count();
            $today=DB::table('users')
                ->select('users.id', 'users.region_id','tasks.created_at', 'tasks.id as id')
                ->join('tasks', 'users.id', '=', 'tasks.user_id')
                ->where('region_id',$region->id)->whereDate('tasks.created_at', Carbon::today())->count();
            $yesterday=DB::table('users')
                ->select('users.id', 'users.region_id','tasks.created_at', 'tasks.id as id')
                ->join('tasks', 'users.id', '=', 'tasks.user_id')
                ->where('region_id',$region->id)->whereDate('tasks.created_at', Carbon::yesterday())->count();
            $thisweek=DB::table('users')
                ->select('users.id', 'users.region_id','tasks.created_at', 'tasks.id as id')
                ->join('tasks', 'users.id', '=', 'tasks.user_id')
                ->where('region_id',$region->id)->whereBetween('tasks.created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $district=District::where('region_id',$region->id)->count();
            $hodimlar=User::where('region_id',$region->id)->whereNotNull('district_id')->count();
            if ($hodimlar>0) {
                $kpi = ($today / ($hodimlar * 5))*100;
            }else{
                $kpi=0;
            }
            $farqi=$today-$yesterday;


            $atvet[$region->name]['id'] =  $region->id;
            $atvet[$region->name]['nomi'] =  $region->name;
            $atvet[$region->name]['District']= $district;
            $atvet[$region->name]['User']= $hodimlar;
            $atvet[$region->name]['today']= $today;
            $atvet[$region->name]['yesterday']= $yesterday;
            $atvet[$region->name]['farqi']= $farqi;
            $atvet[$region->name]['kpi']= $kpi;
            $atvet[$region->name]['hammasi'] =  $xx;
            $atvet[$region->name]['thisweek']= $thisweek;


        }
//        return $this->sendSuccess($atvet,'Viloyatlar kesimida qilingan ishlar');
        return $atvet;
    }
    public function district($id){
        $region=Region::where('id',$id)->first();
        $districts=District::where('region_id',$id)->get();
        $atvet=[];
        foreach ($districts as $district){
        $xx=DB::table('users')
            ->select('users.id', 'users.region_id','users.district_id','tasks.created_at', 'tasks.id as id')
            ->join('tasks', 'users.id', '=', 'tasks.user_id')
            ->where('district_id',$district->id)->count();

        $today=DB::table('users')
                ->select('users.id', 'users.region_id','users.district_id','tasks.created_at', 'tasks.id as id')
                ->join('tasks', 'users.id', '=', 'tasks.user_id')
                ->where('district_id',$district->id)->whereDate('tasks.created_at', Carbon::today())->count();

        $yesterday=DB::table('users')
                ->select('users.id', 'users.region_id','users.district_id','tasks.created_at', 'tasks.id as id')
                ->join('tasks', 'users.id', '=', 'tasks.user_id')
                ->where('district_id',$district->id)->whereDate('tasks.created_at', Carbon::yesterday())->count();

        $thisweek=DB::table('users')
                ->select('users.id', 'users.region_id','users.district_id','tasks.created_at', 'tasks.id as id')
                ->join('tasks', 'users.id', '=', 'tasks.user_id')
                ->where('district_id',$district->id)
                ->whereBetween('tasks.created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();

        $hodimlar=User::where('district_id',$district->id)->count();

            if ($hodimlar>0) {
                $kpi = ($today / ($hodimlar * 5))*100;
            }else{
                $kpi=0;
            }
            $farqi=$today-$yesterday;
        $atvet[$district->name]['id']=$district->id;
        $atvet[$district->name]['name']=$district->name;
        $atvet[$district->name]['hammasi']=$xx;
        $atvet[$district->name]['today']= $today;
        $atvet[$district->name]['kpi']= $kpi;
        $atvet[$district->name]['yesterday']= $yesterday;
        $atvet[$district->name]['thisweek']= $thisweek;
        $atvet[$district->name]['user']= $hodimlar;
        $atvet[$district->name]['farqi']= $farqi;
        }

        return $atvet;

    }

    public function userDistrict($id){

        $users=User::where('district_id',$id)->get();
        $ds=District::where('id',$id)->first();
        $atvet=[];
        foreach ($users as $user){
            $tasks=Task::where('user_id',$user->id)->count();
            $today=Task::where('user_id',$user->id)->whereDate('tasks.created_at', Carbon::today())->count();
            $yesterday=Task::where('user_id',$user->id)->whereDate('tasks.created_at', Carbon::yesterday())->count();
            $thisweek=Task::where('user_id',$user->id)->whereBetween('tasks.created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $farqi=$today-$yesterday;


            $atvet[$user->name]['id']=$user->id;
            $atvet[$user->name]['name']=$user->name;
            $atvet[$user->name]['jami']=$tasks;
            $atvet[$user->name]['today']=$today;
            $atvet[$user->name]['yesterday']=$yesterday;
            $atvet[$user->name]['thisweek']=$thisweek;
            $atvet[$user->name]['farqi']=$farqi;

        }
        return $atvet;
}


public function userCount($id){
        $tasks=Task::where('user_id',$id)->orderBy('id', 'DESC')->get();
        $user=User::where('id',$id)->first();
        $type=TaskType::all();
        $atvet=[];
//        $atvet['name']=$tasks->user->name;
    foreach ($tasks as $task){
        $atvet[$task->id]['id']=$task->id;
        $atvet[$task->id]['name']=$user->name;
        $atvet[$task->id]['akt']=$task->akt;
        $atvet[$task->id]['img1']=$task->img1;
        $atvet[$task->id]['img2']=$task->img2;
        $atvet[$task->id]['img3']=$task->img3;
        $atvet[$task->id]['img4']=$task->img4;
        $atvet[$task->id]['img5']=$task->img5;
        $atvet[$task->id]['organization']=$task->organization;
        $atvet[$task->id]['stir']=$task->stir;
        $atvet[$task->id]['lang']=$task->lang;
        $atvet[$task->id]['lat']=$task->lat;
        $atvet[$task->id]['task_id']=$type[($task->task_id)-1]->name;
        $atvet[$task->id]['day']=$task->created_at->subMinutes(300)->format('d.m.Y  H:i');
    }


        return $atvet;
}


}
