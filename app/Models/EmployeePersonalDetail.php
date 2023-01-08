<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePersonalDetail extends Model
{
    use HasFactory;

    public function Employee()
    {
        return $this->belongsTo(EmployeeDetail::class);
    }
}
