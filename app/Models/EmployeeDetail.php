<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    use HasFactory;


    public function personalDetails()
    {
        return $this->hasOne(EmployeePersonalDetail::class);
    }

    public function financialDetails()
    {
        return $this->hasMany(EmployeFinancialeDetail::class);
    }
}
