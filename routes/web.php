<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminKit\Pages\DashboardPageController;
use App\Http\Controllers\AdminKit\Pages\ProfilePageController;
use App\Http\Controllers\AdminKit\Pages\BlankPageController;
use App\Http\Controllers\AdminKit\Pages\ChartPageController;

use App\Http\Controllers\AdminKit\Pages\SubNestedLv1Controller;
use App\Http\Controllers\AdminKit\Pages\SubNestedLv2Controller;
use App\Http\Controllers\AdminKit\Pages\SubNestedLv3Controller;

use App\Http\Controllers\AdminKit\Components\ButtonController;
use App\Http\Controllers\AdminKit\Components\FormController;
use App\Http\Controllers\AdminKit\Components\CardsController;
use App\Http\Controllers\AdminKit\Components\TypographyController;
use App\Http\Controllers\AdminKit\Components\IconsController;

use App\Http\Controllers\BlankController;

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

Route::get('/', [BlankController::class, 'index'])->middleware('sso-web');

Route::prefix('adminkit/pages')->group(function () {
    Route::get('/dashboard', [DashboardPageController::class, 'index']);
    Route::get('/profile', [ProfilePageController::class, 'index']);
    Route::get('/blank', [BlankPageController::class, 'index']);
    Route::get('/chart', [ChartPageController::class, 'index']);

    Route::get('/subnestedlv1', [SubNestedLv1Controller::class, 'index']);
    Route::get('/subnestedlv2', [SubNestedLv2Controller::class, 'index']);
    Route::get('/subnestedlv3', [SubNestedLv3Controller::class, 'index']);
    Route::get('/subnestedlv3_item1', [SubNestedLv3Controller::class, 'item1']);
    Route::get('/subnestedlv3_item2', [SubNestedLv3Controller::class, 'item2']);
    Route::get('/subnestedlv3_item3', [SubNestedLv3Controller::class, 'item3']);
});

Route::prefix('adminkit/ui')->group(function () {
    Route::get('/buttons', [ButtonController::class, 'index']);
    Route::get('/forms', [FormController::class, 'index']);
    Route::get('/cards', [CardsController::class, 'index']);
    Route::get('/typography', [TypographyController::class, 'index']);
    Route::get('/icons', [IconsController::class, 'index']);
});
