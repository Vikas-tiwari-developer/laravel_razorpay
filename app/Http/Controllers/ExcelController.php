<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;

class ExcelController extends Controller
{
    public function importExportView()
    {
       return view('excel_imp_exp.import');
    }

    public function importExcel(Request $request) 
    {
        try{
            \Excel::import(new UsersImport,$request->import_file);

            \Session::put('success', 'Your file is imported successfully in database.');
               
            return back();
        } catch(\Exception $ex){
            dd($ex);
        }    
    }
}
