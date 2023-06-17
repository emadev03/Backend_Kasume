<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ConnectedDeviceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperLoginController;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//User
Route::get('/', [HomeController::class, 'index']);
Route::get('/superLogin', [SuperLoginController::class, 'index2'])->name('superlogin')->middleware('guest');
Route::post('/superAdminLogin', [SuperLoginController::class, 'authenticate2'])->middleware('guest');
Route::post('/logout2', [SuperLoginController::class, 'logout2']);
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/addAdmin', [AdminController::class, 'index']);
Route::post('/addAdmin', [AdminController::class, 'store'])->name('addAdmin');
Auth::routes();

// Super Admin
Route::middleware(['auth', 'must-superadmin'])->group(function () {
    Route::get('/adminList', [AdminController::class, 'list'])->name('adminList');
    Route::delete('/adminList/delete/{id}', [AdminController::class, 'destroy'])->name('delete.admin');
    Route::post('/adminList/update/{id}', [AdminController::class, 'update'])->name('update.admin');
    Route::get('/adminList/edit/{id}', [AdminController::class, 'edit'])->name('edit.admin');
});

//Admin & Super Admin
Route::middleware(['auth', 'must-superadmin-or-admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    //Add Device
    Route::get('/admin/add-new-device', [DeviceController::class, 'addNewDevice'])->name('adminAddNewDevice');
    Route::post('/admin/add-new-device', [DeviceController::class, 'adminAddNewDevice'])->name('adminAddNewDevice');

    //List Device
    Route::get('/listDevice', [DeviceController::class, 'list'])->name('listDevice');

    //Delete Device
    Route::delete('/admin/delete-device{code}', [DeviceController::class, 'deleteDevice'])->name('deleteDevice');

    //Update Device
    Route::get('/admin/edit-device{code}', [DeviceController::class, 'editDevice'])->name('editDevice');
    Route::post('/admin/update-device{code}', [DeviceController::class, 'updateDevice'])->name('updateDevice');

    //Connect Device
    Route::get('/admin/connect-device{code}', [DeviceController::class, 'addNewConnectedDevice'])->name('connectDevice');
    Route::post('/admin/connect-device', [ConnectedDeviceController::class, 'connectDevice'])->name('connectedDevice');

    //Add Connected Device
    Route::get('/admin/add-new-connected-device', [ConnectedDeviceController::class, 'addNewConnectedDevice'])->name('adminAddNewConnectedDevice');
    Route::post('/admin/add-new-connected-device', [ConnectedDeviceController::class, 'adminAddNewConnectedDevice'])->name('adminAddNewConnectedDevice');

    //List Connected Device
    Route::get('/list-connected-device', [ConnectedDeviceController::class, 'listConnectedDevice'])->name('listConnectedDevice');

    //Update Connected Device
    Route::get('/admin/edit-connected-device{id}', [ConnectedDeviceController::class, 'editConnectedDevice'])->name('editConnectedDevice');
    Route::post('/admin/update-connected-device{id}', [ConnectedDeviceController::class, 'updateConnectedDevice'])->name('updateConnectedDevice');

    //Done Connected Device
    Route::delete('/admin/connected-device/{id}', [ConnectedDeviceController::class, 'moveToHistory'])->name('moveToHistory');

    //List Device
    Route::get('/history-connected-device', [ConnectedDeviceController::class, 'historyConnectedDevice'])->name('historyConnectedDevice');
});
