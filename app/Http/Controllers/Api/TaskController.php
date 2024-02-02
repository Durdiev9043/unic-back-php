<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TaskController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
//'user_id','img1','img2','img3','img4','img5','organization','stir','lang','lat','task_id'
        if (isset($request->img1[5]) && $request->hasfile('img1') &&  $request->hasfile('akt')){
            $akt = Str::uuid()->toString();
            $aktName = $akt . '-' . time() . '.' . $request->akt->extension();
            $request->akt->move(public_path('../public/storage/galereya/'), $aktName);
            $uuid1 = Str::uuid()->toString();
            $fileName1 = $uuid1 . '-' . time() . '.' . $request->img1[0]->extension();
            $request->img1[0]->move(public_path('../public/storage/galereya/'), $fileName1);
            $uuid2 = Str::uuid()->toString();
            $fileName2 = $uuid2 . '-' . time() . '.' . $request->img1[1]->extension();
            $request->img1[1]->move(public_path('../public/storage/galereya/'), $fileName2);
            $uuid3 = Str::uuid()->toString();
            $fileName3 = $uuid3 . '-' . time() . '.' . $request->img1[2]->extension();
            $request->img1[2]->move(public_path('../public/storage/galereya/'), $fileName3);
            $uuid4 = Str::uuid()->toString();
            $fileName4 = $uuid4 . '-' . time() . '.' . $request->img1[3]->extension();
            $request->img1[3]->move(public_path('../public/storage/galereya/'), $fileName4);
            $uuid5 = Str::uuid()->toString();
            $fileName5 = $uuid5 . '-' . time() . '.' . $request->img1[4]->extension();
            $request->img1[4]->move(public_path('../public/storage/galereya/'), $fileName4);
            $uuid6 = Str::uuid()->toString();
            $fileName6 = $uuid6 . '-' . time() . '.' . $request->img1[5]->extension();
            $request->img1[5]->move(public_path('../public/storage/galereya/'), $fileName6);
            Task::create([
                'user_id' => $request->user_id,
                'img1' => $fileName1,
                'img2' => $fileName2,
                'img3' => $fileName3,
                'img4' => $fileName4,
                'img5' => $fileName5,
                'img6' => $fileName6,
                'akt' => $aktName,
                'organization'=>$request->organization,
                'stir'=>$request->stir,
                'lang'=>$request->lang,
                'lat'=>$request->lat,
                'task_id'=>$request->task_id,
            ]);
        }
        elseif (isset($request->img1[4]) && $request->hasfile('img1') &&  $request->hasfile('akt')){
            $akt = Str::uuid()->toString();
            $aktName = $akt . '-' . time() . '.' . $request->akt->extension();
            $request->akt->move(public_path('../public/storage/galereya/'), $aktName);
            $uuid1 = Str::uuid()->toString();
            $fileName1 = $uuid1 . '-' . time() . '.' . $request->img1[0]->extension();
            $request->img1[0]->move(public_path('../public/storage/galereya/'), $fileName1);
            $uuid2 = Str::uuid()->toString();
            $fileName2 = $uuid2 . '-' . time() . '.' . $request->img1[1]->extension();
            $request->img1[1]->move(public_path('../public/storage/galereya/'), $fileName2);
            $uuid3 = Str::uuid()->toString();
            $fileName3 = $uuid3 . '-' . time() . '.' . $request->img1[2]->extension();
            $request->img1[2]->move(public_path('../public/storage/galereya/'), $fileName3);
            $uuid4 = Str::uuid()->toString();
            $fileName4 = $uuid4 . '-' . time() . '.' . $request->img1[3]->extension();
            $request->img1[3]->move(public_path('../public/storage/galereya/'), $fileName4);
            $uuid5 = Str::uuid()->toString();
            $fileName5 = $uuid5 . '-' . time() . '.' . $request->img1[4]->extension();
            $request->img1[4]->move(public_path('../public/storage/galereya/'), $fileName4);
            Task::create([
                'user_id' => $request->user_id,
                'img1' => $fileName1,
                'img2' => $fileName2,
                'img3' => $fileName3,
                'img4' => $fileName4,
                'img5' => $fileName5,
                'akt' => $aktName,
                'organization'=>$request->organization,
                'stir'=>$request->stir,
                'lang'=>$request->lang,
                'lat'=>$request->lat,
                'task_id'=>$request->task_id,
            ]);
        }
        elseif (isset($request->img1[3])  && $request->hasfile('img1') &&  $request->hasfile('akt')){
            $akt = Str::uuid()->toString();
            $aktName = $akt . '-' . time() . '.' . $request->akt->extension();
            $request->akt->move(public_path('../public/storage/galereya/'), $aktName);
            $uuid1 = Str::uuid()->toString();
            $fileName1 = $uuid1 . '-' . time() . '.' . $request->img1[0]->extension();
            $request->img1[0]->move(public_path('../public/storage/galereya/'), $fileName1);
            $uuid2 = Str::uuid()->toString();
            $fileName2 = $uuid2 . '-' . time() . '.' . $request->img1[1]->extension();
            $request->img1[1]->move(public_path('../public/storage/galereya/'), $fileName2);
            $uuid3 = Str::uuid()->toString();
            $fileName3 = $uuid3 . '-' . time() . '.' . $request->img1[2]->extension();
            $request->img1[2]->move(public_path('../public/storage/galereya/'), $fileName3);
            $uuid4 = Str::uuid()->toString();
            $fileName4 = $uuid4 . '-' . time() . '.' . $request->img1[3]->extension();
            $request->img1[3]->move(public_path('../public/storage/galereya/'), $fileName4);
            Task::create([
                'user_id' => $request->user_id,
                'img1' => $fileName1,
                'img2' => $fileName2,
                'img3' => $fileName3,
                'img4' => $fileName4,
                'akt' => $aktName,
                'organization'=>$request->organization,
                'stir'=>$request->stir,
                'lang'=>$request->lang,
                'lat'=>$request->lat,
                'task_id'=>$request->task_id,
            ]);
        }
        elseif (isset($request->img1[2])  && $request->hasfile('img1') &&  $request->hasfile('akt')){
            $akt = Str::uuid()->toString();
            $aktName = $akt . '-' . time() . '.' . $request->akt->extension();
            $request->akt->move(public_path('../public/storage/galereya/'), $aktName);
            $uuid1 = Str::uuid()->toString();
            $fileName1 = $uuid1 . '-' . time() . '.' . $request->img1[0]->extension();
            $request->img1[0]->move(public_path('../public/storage/galereya/'), $fileName1);
            $uuid2 = Str::uuid()->toString();
            $fileName2 = $uuid2 . '-' . time() . '.' . $request->img1[1]->extension();
            $request->img1[1]->move(public_path('../public/storage/galereya/'), $fileName2);
            $uuid3 = Str::uuid()->toString();
            $fileName3 = $uuid3 . '-' . time() . '.' . $request->img1[2]->extension();
            $request->img1[2]->move(public_path('../public/storage/galereya/'), $fileName3);
            Task::create([
                'user_id' => $request->user_id,
                'img1' => $fileName1,
                'img2' => $fileName2,
                'img3' => $fileName3,
                'akt' => $aktName,
                'organization'=>$request->organization,
                'stir'=>$request->stir,
                'lang'=>$request->lang,
                'lat'=>$request->lat,
                'task_id'=>$request->task_id,
            ]);
        }
        elseif (isset($request->img1[1])  && $request->hasfile('img1') &&  $request->hasfile('akt')){
            $akt = Str::uuid()->toString();
            $aktName = $akt . '-' . time() . '.' . $request->akt->extension();
            $request->akt->move(public_path('../public/storage/galereya/'), $aktName);
        $uuid1 = Str::uuid()->toString();
        $fileName1 = $uuid1 . '-' . time() . '.' . $request->img1[0]->extension();
        $request->img1[0]->move(public_path('../public/storage/galereya/'), $fileName1);
        $uuid2 = Str::uuid()->toString();
        $fileName2 = $uuid2 . '-' . time() . '.' . $request->img1[1]->extension();
        $request->img1[1]->move(public_path('../public/storage/galereya/'), $fileName2);
        Task::create([
            'user_id' => $request->user_id,
            'img1' => $fileName1,
            'img2' => $fileName2,
            'organization'=>$request->organization,
            'stir'=>$request->stir,
            'akt'=>$aktName,
            'lang'=>$request->lang,
            'lat'=>$request->lat,
            'task_id'=>$request->task_id,
        ]);
    }
    elseif (isset($request->img1[0]) && $request->hasfile('img1') &&  $request->hasfile('akt')){
        $akt = Str::uuid()->toString();
        $aktName = $akt . '-' . time() . '.' . $request->akt->extension();
        $request->akt->move(public_path('../public/storage/galereya/'), $aktName);
        $uuid1 = Str::uuid()->toString();
        $fileName1 = $uuid1 . '-' . time() . '.' . $request->img1[0]->extension();
        $request->img1[0]->move(public_path('../public/storage/galereya/'), $fileName1);
        Task::create([
            'user_id' => $request->user_id,
            'img1' => $fileName1,
            'organization'=>$request->organization,
            'stir'=>$request->stir,
            'akt'=>$aktName,
            'lang'=>$request->lang,
            'lat'=>$request->lat,
            'task_id'=>$request->task_id,
        ]);}
        else{
            return response()->json(['status' => false, 'msg' => 'file yuklanmagan']);
        }
               return response()->json(['status' => true,]);


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
