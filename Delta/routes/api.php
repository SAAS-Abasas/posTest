<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeDutyController;
use App\Http\Controllers\permissionRoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('all-permissions-by-role',[permissionRoleController::class, 'allPermissionsByRole'])->name('allPermissionsByRole'); 

Route::get('all-products',[ProductController::class,'productAll']);
Route::get('supplier-find',[SupplierController::class,'supplierFind']);
Route::post('supplier-create',[SupplierController::class,'supplierStore'])->name("SupplierStore");
Route::get('customer-find',[CustomerController::class,'customerFind']);
Route::post('customer-create',[CustomerController::class,'customerStore'])->name("CustomerStore");
Route::get('get-product-by-id',[ProductController::class,'getProductById'])->name("getProductById");
Route::get('get-weekly-employee-duties',[EmployeeDutyController::class, 'get_weekly_Data'])->name("get-weekly-employee-duties");