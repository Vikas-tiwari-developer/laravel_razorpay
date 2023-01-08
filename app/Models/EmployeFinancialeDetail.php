<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeFinancialeDetail extends Model
{
    use HasFactory;

    public function EmployeeDetail()
    {
        return $this->belongsTo(EmployeeDetail::class);
    }
}
