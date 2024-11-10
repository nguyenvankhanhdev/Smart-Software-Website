<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTours extends Model
{
    use HasFactory;
    public function blogtypes(){
        return $this->belongsTo(BlogTypes::class,'blog_type_id','id');
    }
    public function employees(){
        return $this->belongsTo(Employees::class,'employee_id','id');
    }
}
