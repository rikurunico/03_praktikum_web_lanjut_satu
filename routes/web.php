<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
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

Route::get("/", [HomeController::class, "index"])->name("home");

Route::get("/produk", [ProductController::class, "index"])->name("product");
Route::prefix("/produk")->group(function () {
    Route::get("/1", [ProductController::class, "detail"])->name("product.detail");
    Route::get("/2", [ProductController::class, "detail2"])->name("product.detail");
    Route::get("/3", [ProductController::class, "detail3"])->name("product.detail");
});

Route::get("/about", [AboutUsController::class, "about"])->name("about-us");

Route::get("/contact", [ContactUsController::class, "contact"])->name("contact-us");

Route::prefix("/program")->group(function() {
    Route::get("/1", [ProgramController::class, "program1"])->name("program.detail");
    Route::get("/2", [ProgramController::class, "program2"])->name("program.detail");
    Route::get("/3", [ProgramController::class, "program3"])->name("program.detail");
});

Route::get("/news", [NewsController::class, "index"])->name("news");
Route::prefix("/news")->group(function () {
    Route::get("/kpop/{slug}", [NewsController::class, "kpop"])->name("news.detail");
    Route::get("/gaming/{slug}", [NewsController::class, "gaming"])->name("news.detail");
    Route::get("/tech/{slug}", [NewsController::class, "tech"])->name("news.detail");
});