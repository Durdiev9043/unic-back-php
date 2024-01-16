<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
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

        $uuid = Str::uuid()->toString();
        $fileName = $uuid . '-' . time() . '.' . $request->img1->extension();
        $request->img1->move(public_path('../public/storage/galereya/'), $fileName);
        Task::create([
            'user_id' => $request->user_id,
            'img1' => $fileName,
            'organization'=>$request->organization,
            'stir'=>$request->stir,
            'lang'=>$request->lang,
            'lat'=>$request->lat,
            'task_id'=>$request->task_id,




        ]);
        //addAlert('success');
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
