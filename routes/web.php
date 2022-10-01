<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FeedbackController;

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

Route::get("/",[HomeController::class,"index"]);
Route::get("/donorsregistration",[HomeController::class,"donorsregistration"]);
Route::get("/donorsearch",[HomeController::class,'donorsearch']);
Route::get("/home",[HomeController::class,"index"]);
Route::get("/feedback",[HomeController::class,"feedback"])->name('feedback');
Route::post("/add_feedback",[FeedbackController::class,'addFeedback']);



Route::get("/users",[AdminController::class,"user"]);
Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);
Route::get("/search-donor",[AdminController::class,"search"]);
Route::get("/activedonors",[AdminController::class,"activedonors"]);
Route::get("/feedbacks",[AdminController::class,"feedbacks"]);
Route::get("/deletefeedback/{id}",[AdminController::class,"deletefeedback"]);


Route::get("/donorlist",[SearchController::class,"index"]);
Route::get("/donorsearch",[SearchController::class,'search'])->name('web.donorsearch');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/redirects','App\Http\Controllers\HomeController@redirects');

Route::get('add_donor',['donorsregistration']);
Route::post('add_donor',[DonorsController::class,'addData']);
