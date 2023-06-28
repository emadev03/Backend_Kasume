<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ConnectedDeviceController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
Route::middleware(['guest'])->group(function () {
//User
    Route::get('/', [DashboardController::class, 'index2']);

    // Login Super Admin
    Route::get('/superLogin', [App\Http\Controllers\Auth\SuperLoginController::class, 'showLoginForm'])->name('superlogin');
    Route::post('/superAdminLogin', [App\Http\Controllers\Auth\SuperLoginController::class, 'login']);

    // Login Admin
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    Auth::routes();
    Route::get('/get', [App\Http\Controllers\View::class, 'get'])->name('get');
    Route::get('/sensor/{idAlat}/{dropsPerMinutes}/{kapasitas}/{status}', [App\Http\Controllers\View::class, 'sensor']);
});
// Super Admin
Route::middleware(['auth', 'must-superadmin'])->group(function () {
    // Menambahkan Admin Baru
    Route::get('/addAdmin', [AdminController::class, 'index']);
    Route::post('/addAdmin', [AdminController::class, 'store'])->name('addAdmin');

    // List Admin
    Route::get('/adminList', [AdminController::class, 'list'])->name('adminList');

    // Hapus Admin
    Route::delete('/adminList/delete/{id}', [AdminController::class, 'destroy'])->name('delete.admin');

    // Update Admin
    Route::post('/adminList/update/{id}', [AdminController::class, 'update'])->name('update.admin');
    Route::get('/adminList/edit/{id}', [AdminController::class, 'edit'])->name('edit.admin');

    // Logout
    Route::post('/logoutSuperAdmin', [App\Http\Controllers\Auth\SuperLoginController::class, 'logout']);
});

//Admin & Super Admin
Route::middleware(['auth', 'must-superadmin-or-admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Add Device
    Route::get('/admin/add-new-device', [DeviceController::class, 'addNewDevice'])->name('adminAddNewDevice');
    Route::post('/admin/add-new-device', [DeviceController::class, 'adminAddNewDevice'])->name('adminAddNewDevice');

    // List Device
    Route::get('/listDevice', [DeviceController::class, 'list'])->name('listDevice');

    // Delete Device
    Route::delete('/admin/delete-device{code}', [DeviceController::class, 'deleteDevice'])->name('deleteDevice');

    // Update Device
    Route::get('/admin/edit-device{code}', [DeviceController::class, 'editDevice'])->name('editDevice');
    Route::post('/admin/update-device{code}', [DeviceController::class, 'updateDevice'])->name('updateDevice');

    // Connect Device
    Route::get('/admin/connect-device{code}', [DeviceController::class, 'addNewConnectedDevice'])->name('connectDevice');
    Route::post('/admin/connect-device', [ConnectedDeviceController::class, 'connectDevice'])->name('connectedDevice');

    // Add Connected Device
    Route::get('/admin/add-new-connected-device', [ConnectedDeviceController::class, 'addNewConnectedDevice'])->name('adminAddNewConnectedDevice');
    Route::post('/admin/add-new-connected-device', [ConnectedDeviceController::class, 'adminAddNewConnectedDevice'])->name('adminAddNewConnectedDevice');

    // List Connected Device
    Route::get('/list-connected-device', [ConnectedDeviceController::class, 'listConnectedDevice'])->name('listConnectedDevice');

    // Update Connected Device
    Route::get('/admin/edit-connected-device{id}', [ConnectedDeviceController::class, 'editConnectedDevice'])->name('editConnectedDevice');
    Route::post('/admin/update-connected-device{id}', [ConnectedDeviceController::class, 'updateConnectedDevice'])->name('updateConnectedDevice');

    // Done Connected Device
    Route::delete('/admin/connected-device/{id}', [ConnectedDeviceController::class, 'moveToHistory'])->name('moveToHistory');

    // List Device
    Route::get('/history-connected-device', [ConnectedDeviceController::class, 'historyConnectedDevice'])->name('historyConnectedDevice');

    // Logout
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});

