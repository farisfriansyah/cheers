<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SustainabilityController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\EmailController;
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
    Route::post('/search',[BlogController::class,'search']);
    // Route::get('/search',[BlogController::class,'search']);
    Route::get('/all/',[BlogController::class,'search']);
    Route::get('/feels-great/',[BlogController::class,'blog_page']);
    Route::get('/story-of-the-week/',[BlogController::class,'blog_page']);

    Route::group(['prefix' => 'view'], function(){
        Route::get('/feels-great/{slug}',[BlogController::class,'view']);
        Route::get('/story-of-the-week/{slug}',[BlogController::class,'view']);
    });
});

Route::get('/sustainability', [SustainabilityController::class,'index']);

Route::get('/brand-story', [BrandController::class,'index']);

Route::get('/campaign', [CampaignController::class,'index']);

Route::get('/faq', [FaqController::class,'index']);

Route::get('/contact', [ContactController::class,'index']);

Route::group(['prefix' => 'login'], function(){
    Route::get('/', [LoginController::class,'index']);
    Route::post('check',[LoginController::class,'check_login']);
    Route::post('do', [LoginController::class,'do_login']);
});

Route::get('/registration', [RegistrationController::class,'index']);

Route::get('lang/{language}', [LocalizationController::class,'switch'])->name('localization.switch');

Route::get('/sendemail', [EmailController::class,'index']);
Route::post('/sendemail/send', [EmailController::class,'send']);
