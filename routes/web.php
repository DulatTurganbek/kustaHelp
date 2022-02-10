<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BoardOfTrusteesController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Frontend\ApplicationController;
use App\Http\Controllers\Frontend\PagesController;
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



Auth::routes();



//admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('homeAdmin');

    Route::resource('banner', BannerController::class);
    Route::resource('about', AboutController::class);
    Route::resource('team', TeamController::class);
    Route::resource('boardOfTrustees', BoardOfTrusteesController::class);
    Route::resource('news', NewsController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('report', ReportController::class);
    Route::resource('contact', ContactController::class);

});

//frontend

Route::middleware(['auth'])->prefix('/')->group(function () {
    Route::get('/', [PagesController::class,'index'])->name('home');
    Route::get('/news/{id}', [PagesController::class,'showNews'])->name('show-news');
    Route::get('/project/{id}', [PagesController::class,'showProject'])->name('show-project');
    Route::post('/store',[ApplicationController::class,'store'])->name('app-store');
//
});



