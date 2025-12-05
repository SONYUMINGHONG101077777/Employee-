<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// បើគ្រា់តែ Return UI ឲ្យ user ទេ ប្រើ get គឺរួចរាល់ហើយ
Route::get('employee',[EmployeeController::class, 'index']) -> name('employee.index');//នៅ Routeមួយគ្រាន់ហៅឈ្មោះមួយនិងអាចហៅបាន ហើយ
                                           //class ក្រាន់ជា Mathod នៅក្នុង controller
Route::get('employee/create',[EmployeeController::class,'create'])-> name('employee.create'); 
// នេះ គឺជាការ send dataទៅកាន់ Database គឺយើងប្រើ Mathod POST
Route::post('/employee/store',[EmployeeController::class,'store']) -> name('employee.store'); //នៅពេល ដែល frontend ចង់ reques មកRouteនេះគ្រាន់តែសរសេរបែបនេះ employee.store   គែមកហើយ
            // Employeeដូចគ្នានិងខាងលើដែរទេ ដូចដាក់/Storeវិញ
// update
Route::get('employee/{employee}/edit',[EmployeeController::class,'edit'])-> name('employee.edit');
Route::put('/employee/{employee}/update', [EmployeeController::class, 'update']) -> name('employee.update');