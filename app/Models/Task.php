<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=['user_id','img1','img2','img3','img4','img5','organization','stir','lang','lat','task_id','akt'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function task(){
        return $this->belongsTo(TaskType::class);
    }
}
