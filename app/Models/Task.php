<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    // phân công chức vụ

    public function employees(){
        return $this->belongsTo(Employees::class,'employee_id','id');
    }
    public function positions(){
        return $this->belongsTo(Positions::class,'position_id','id');
    }
}
