<?php

use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\Auth\LoginContoller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware'=>'auth'],function(){

    Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    //Customer
    Route::get('create/customer', [CustomerController::class, 'create'])->name('create.customer');
    Route::post('store/customer', [CustomerController::class, 'store'])->name('store.customer');
    Route::get('index/customer',  [CustomerController::class, 'index'])->name('index.customer');
    Route::get('view/customer{id}',[CustomerController::class, 'view'])->name('view.customer');
    Route::get('delete/customer{id}',[CustomerController::class, 'destroy'])->name('delete.customer');
    Route::get('edit/customer{id}',[CustomerController::class, 'edit'])->name('edit.customer');
    Route::post('update/customer{id}', [CustomerController::class, 'update'])->name('update.customer');

    //Employeee
    Route::get('create/employee', [EmployeeController::class, 'create'])->name('create.employee');
    Route::post('store/employee', [EmployeeController::class, 'store'])->name('store.employee');
    Route::get('index/employee',  [EmployeeController::class, 'index'])->name('index.employee');
    Route::get('view/employee{id}',[EmployeeController::class, 'view'])->name('view.employee');
    Route::get('delete/employee{id}',[EmployeeController::class, 'destroy'])->name('delete.employee');
    Route::get('edit/employee{id}',[EmployeeController::class, 'edit'])->name('edit.employee');
    Route::post('update/employee{id}', [EmployeeController::class, 'update'])->name('update.employee');

    //suppiler
    Route::get('create/supplier', [SupplierController::class, 'create'])->name('create.supplier');
    Route::post('store/supplier', [SupplierController::class, 'store'])->name('store.supplier');
    Route::get('index/supplier',  [SupplierController::class, 'index'])->name('index.supplier');
    Route::get('view/supplier{id}',[SupplierController::class, 'view'])->name('view.supplier');
    Route::get('delete/supplier{id}',[SupplierController::class, 'destroy'])->name('delete.supplier');
    Route::get('edit/supplier{id}',[SupplierController::class, 'edit'])->name('edit.supplier');
    Route::post('update/supplier{id}', [SupplierController::class, 'update'])->name('update.supplier');

    //category
    Route::get('create/category', [CategoryController::class, 'create'])->name('create.category');
    Route::post('store/category', [CategoryController::class, 'store'])->name('store.category');
    Route::get('index/category',  [CategoryController::class, 'index'])->name('index.category');
    Route::get('view/category{id}',[CategoryController::class, 'view'])->name('view.category');
    Route::get('delete/category{id}',[CategoryController::class, 'destroy'])->name('delete.category');
    Route::get('edit/category{id}',[CategoryController::class, 'edit'])->name('edit.category');
    Route::post('update/category{id}', [CategoryController::class, 'update'])->name('update.category');

    //Product
    Route::get('create/product', [ProductController::class, 'create'])->name('create.product');
    Route::post('store/product', [ProductController::class, 'store'])->name('store.product');
    Route::get('index/product',  [ProductController::class, 'index'])->name('index.product');
    Route::get('view/product{id}',[ProductController::class, 'view'])->name('view.product');
    Route::get('delete/product{id}',[ProductController::class, 'destroy'])->name('delete.product');
    Route::get('edit/product{id}',[ProductController::class, 'edit'])->name('edit.product');
    Route::post('update/product{id}', [ProductController::class, 'update'])->name('update.product');

    //Expenses
    Route::get('create/expense', [ExpenseController::class, 'create'])->name('create.expense');
    Route::post('store/expense', [ExpenseController::class, 'store'])->name('store.expense');
    Route::get('daily/expense',  [ExpenseController::class, 'daily'])->name('daily.expense');
    Route::get('dailyEdit/expense{id}',  [ExpenseController::class, 'dailyEdit'])->name('dailyEdit.expense');
    Route::post('update.dailyexpense{id}', [ExpenseController::class, 'dailyUpdate'])->name('update.dailyexpense');
    Route::get('delete/dailyEx{id}',[ExpenseController::class, 'destroyDaily'])->name('delete.dailyEx');
    Route::get('monthly/expense',  [ExpenseController::class, 'monthly'])->name('monthly.expense');
    Route::get('monthEdit/expense{id}',  [ExpenseController::class, 'monthEdit'])->name('monthEdit.expense');
    Route::post('update.monthexpense{id}', [ExpenseController::class, 'monthUpdate'])->name('update.monthexpense');
    Route::get('delete/monthEx{id}',[ExpenseController::class, 'destroyMonth'])->name('delete.monthEx');
    Route::get('yearly/expense',  [ExpenseController::class, 'yearly'])->name('yearly.expense');
    Route::get('yearEdit/expense{id}',  [ExpenseController::class, 'yearEdit'])->name('yearEdit.expense');
    Route::post('update.yearexpense{id}', [ExpenseController::class, 'yearUpdate'])->name('update.yearexpense');
    Route::get('delete/yearEx{id}',[ExpenseController::class, 'destroyYear'])->name('delete.yearEx');

    //Attendence
    Route::get('daily/attendence',[AttendenceController::class, 'dailyAttendence'])->name('daily.attendence');
    Route::post('store/attendence',[AttendenceController::class, 'storeAttendence'])->name('store.attendence');
    Route::get('all/attendence',[AttendenceController::class, 'allAttendence'])->name('all.attendence');
    Route::get('edit/attendence{edit_date}',[AttendenceController::class, 'editAttendence'])->name('edit.attendence');
    Route::post('update/attendence',[AttendenceController::class, 'updateAttendence'])->name('update.attendence');

    //Logout
    Route::get('admin/logout',[LoginContoller::class,'logout'])->name('logout');

    //profile
    Route::get('admin/profile',[LoginContoller::class,'userProfile'])->name('user.profile');

    //purchase
    Route::get('create/purchase',[PurchaseController::class,'create'])->name('create.purchase');

    //stock
    Route::get('view/stock',[StockController::class,'view'])->name('view.stock');

});

Route::group(['middleware'=>'guest'],function(){
    //Login
    Route::get('/',[LoginContoller::class,'showlogin'])->name('/');
    Route::post('admin/login',[LoginContoller::class,'loginprocess'])->name('login');
});


