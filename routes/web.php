<?php

use App\Http\Controllers\PublicArea\ContactUsController;
use App\Http\Controllers\PublicArea\GpaController;
use App\Http\Controllers\PublicArea\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/privacy-policy', [HomeController::class,'privacy'])->name('privacy');
Route::get('/terms&conditions', [HomeController::class,'terms'])->name('terms');


Route::prefix('contact-us')->group(function () {
    Route::get('/', [ContactUsController::class,'contact'])->name('contact');
    Route::post('/store', [ContactUsController::class,'store'])->name('contact.store');
});


Route::prefix('gpa')->group(function () {
    Route::get('/', [GpaController::class,'index'])->name('gpa.calculator');
    Route::get('/{id}/course/delete', [GpaController::class,'remove'])->name('gpa.course.remove');
    Route::get('/course/store', [GpaController::class,'store'])->name('gpa.course.store');
    Route::get('/course/summery', [GpaController::class,'summery'])->name('gpa.course.summery');
    Route::get('/course/all', [GpaController::class,'coursesAll'])->name('gpa.course.all');
    Route::post('/setting/store', [GpaController::class,'settings'])->name('gpa.settings.store');
    Route::get('/get/report', [GpaController::class,'report'])->name('gpa.get.report');

});
