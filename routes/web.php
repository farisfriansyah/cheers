<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AlkalineController;
use App\Http\Controllers\NaturalController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LocalizationController;

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

Route::get('/', [HomeController::class,'index']);

Route::get('/whycheers', [WhyController::class,'index']);

Route::get('/cheers-alkaline', [AlkalineController::class,'index']);
Route::get('/cheers-natural', [NaturalController::class,'index']);

Route::get('/event', [EventController::class,'index']);
Route::get('/event/view/{idx}', [EventController::class,'view']);


Route::group(['prefix' => 'blog'], function(){
    Route::get('/',[BlogController::class,'index']);
    Route::get('/feels-great/',[BlogController::class,'blog_page']);
    Route::get('/story-of-the-week/',[BlogController::class,'blog_page']);

    Route::group(['prefix' => 'view'], function(){
        Route::get('/feels-great/{id}',[BlogController::class,'view']);
        Route::get('/story-of-the-week/{id}',[BlogController::class,'view']);
    });
});


Route::get('/faq', [FaqController::class,'index']);

Route::get('/contact', [ContactController::class,'index']);

Route::get('/login', [LoginController::class,'index']);

Route::get('/registration', [RegistrationController::class,'index']);

Route::get('lang/{language}', [LocalizationController::class,'switch'])->name('localization.switch');
