<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PromoeventController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/course', [CourseController::class, 'index'])->name('course');


Route::get('/coursecategory', [CourseController::class, 'category'])->name('coursecategory');
Route::get('/course/{param}', [CourseController::class, 'show'])->name('coursedetail');

Route::get('/promo&event', [PromoeventController::class, 'index'])->name('promoevent');
Route::get('/promoevent/{param}', [PromoeventController::class, 'show'])->name('promoeventdetail');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
