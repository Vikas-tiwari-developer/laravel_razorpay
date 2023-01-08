<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeDetail;
use App\Models\EmployeePersonalDetail;
use App\Models\EmployeFinancialeDetail;

class EmployeeDetailController extends Controller
{
    public function getAllEmployee()
    {
        $employees  = EmployeeDetail::orderBy('id', 'DESC')->get();

        foreach ($employees as $key => $emp) {
            $emp->personal = EmployeePersonalDetail::where('emp_id',$emp->id)->first();
            $emp->financial = EmployeFinancialeDetail::where('emp_id',$emp->id)->first();
        }

        return view('task_3.employee_list', compact('employees'));
    }

    public function createForm(Request $request){
        return view('form_task');
    }

    public function storeForm(Request $request){
        
        $user = new User();

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        return back();
    }

}
