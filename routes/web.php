<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);

Route::get('/dashboard/role', function () {
    $roles = Role::all();
    return view('pages.dashboard.role', compact('roles'));
})->middleware(['auth'])->name('dashboard');


Route::get('/dashboard', function () {
    $admins = User::where('role_id', 3)->get();
    return view('dashboard', compact('admins'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
