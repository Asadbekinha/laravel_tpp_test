<?php

use App\Http\Controllers\Api\HomeScreenController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\PersonsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('home/banners', [HomeScreenController::class, 'getBanners'])->name('home.banners.all');
Route::get('home/news', [HomeScreenController::class, 'getNews'])->name('home.news.all');
Route::get('home/usefullsites', [HomeScreenController::class, 'getUsefullLinks'])->name('home.links.all');
Route::get('home/indicators', [HomeScreenController::class, 'getIndicators'])->name('home.indicators.all');
Route::get('home/statistics', [HomeScreenController::class, 'getStatistics'])->name('home.statistics.all');
Route::get('home/menus', [HomeScreenController::class, 'getMenus'])->name('home.menus.all');
Route::get('persons', [PersonsController::class, 'getPersons'])->name('persons.all');
Route::get('documents', [DocumentsController::class, 'getDocuments'])->name('documents.all');
Route::post('contact/send', [ContactController::class, 'sendMessage'])->name('message.send');