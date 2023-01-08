<?php

namespace App\Http\Controllers;

// require 'vendor/autoload.php';

use \AlbanyDesigns\NPPESApi\NPPESApi;

use Illuminate\Http\Request;
use App\Models\CompanyEmployee;
class CompanyController extends Controller
{
    public function getAllCompany()
    {
        $companies = CompanyEmployee::pluck("company_name");

        return view('task_1.company', compact('companies'));
    }

    public function getCompanyEmployee(Request $request)
    {
        $employee = [];
        $companies = CompanyEmployee::pluck("company_name");
        $emp_company = $request->get('company');
        foreach ($emp_company as $key => $com) {
            $employee[] = CompanyEmployee::where("company_name", $com)->first();
        }
        
        // dd($employee);
        \Log::info($companies);
        \Log::info($employee);
        return view('task_1.company', compact('employee','companies'));
    }

    public function getNpiData(Request $request)
    {
        $client = new \NPPESApi();

        /** @var Provider **/
        $provider = $client->searchByNumber(1234567890);

        // var_dump($provider);
        dd($provider);
    }
}
