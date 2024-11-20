<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskEmployees extends Model
{
    use HasFactory;
    // bảng phân công nhân viên
    public function employees()
    {
        return $this->belongsTo(Employees::class, 'employee_id', 'id');
    }

    public function tours()
    {
        return $this->belongsTo(Tours::class, 'tour_id', 'id');
    }
}
