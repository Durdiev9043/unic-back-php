<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Daily extends Model
{
    use HasFactory;
    protected $fillable=['user_id','time','day','latt','lang'];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
