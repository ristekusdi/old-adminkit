<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

// AdminRBAC
use App\Http\Controllers\AdminRBAC\MenuController;
use App\Http\Controllers\AdminRBAC\RoleController;

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

require __DIR__.'/sso.php';
require __DIR__.'/adminkit-web.php';

Route::middleware('imissu-web')->group(function() {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index']);
    
    // Admin RBAC
    Route::prefix('admin-rbac')->group(function () {
        Route::get('/menus', [MenuController::class, 'index']);
        Route::post('/menus/refresh', [MenuController::class, 'refresh'])->name('admin-rbac.menus.refresh');

        Route::get('/roles', [RoleController::class, 'index']);
    });  
});