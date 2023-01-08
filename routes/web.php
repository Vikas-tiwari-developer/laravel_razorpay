<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeDetailController;
use App\Http\Controllers\CompanyController;

use App\Http\Controllers\ExcelController;
use App\Http\Controllers\PaymentController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/events', function () {
    // return view('welcome');
    $user = User::inRandomOrder()->first();
    // event(new \App\Events\SomeOneCheckProfile($));
    \App\Events\SomeOneCheckProfile::dispatch($user);

    echo $user->name. ' Your Profile checked Mail Sent!! ';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/razorpay/payment', [PaymentController::class, 'index']);
Route::post('/razorpay/payment/make', [PaymentController::class, 'store'])->name('make.razorpay.pay');

Route::get('/employee/list', [EmployeeDetailController::class, 'getAllEmployee']);
Route::get('/form', [EmployeeDetailController::class, 'createForm']);
Route::post('/form/post', [EmployeeDetailController::class, 'storeForm'])->name('form.store');
Route::get('/company/list', [CompanyController::class, 'getAllCompany']);
Route::post('/company/employee', [CompanyController::class, 'getCompanyEmployee'])->name('emp');
Route::get('/npi/data', [CompanyController::class, 'getNpiData'])->name('npi.data');

// Excel
Route::get('excel/import', [ExcelController::class, 'importExportView'])->name('importExportView');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('exportExcel/{type}', [ExcelController::class, 'exportExcel'])->name('exportExcel');
// Route for import excel data to database.
Route::post('importExcel', [ExcelController::class, 'importExcel'])->name('importExcel');