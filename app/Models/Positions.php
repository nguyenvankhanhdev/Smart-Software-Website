<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    use HasFactory;

   // bảng chức vụ
    public function task(){
        return $this->hasMany(Task::class,'position_id');
    }

}
