<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    public function blogtours(){
        return $this->hasMany(BlogTours::class,'employee_id');
    }
    public function task(){
        return $this->hasMany(Task::class,'employee_id');
    }
    public function taskemployee(){
        return $this->hasMany(TaskEmployees::class,'employee_id');
    }
}
