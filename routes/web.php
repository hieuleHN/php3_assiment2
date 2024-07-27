<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MovieController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get("/listMovie",[MovieController::class, "list"])->name("listMovie");
Route::post("/listMovie",[MovieController::class, "listPost"])->name("listPost");

Route::get("/",[MovieController::class, "index"])->name("movie.index");
Route::get("/home{id}",[MovieController::class, "movie_genre"])->name("home");
Route::post("/home",[MovieController::class, "search"])->name("searchName");

Route::get("/movie-detail{id}",[MovieController::class, "movie_detail"])->name("movie-detail");

Route::get("/post/create",[MovieController::class, "create"])->name("create");
Route::post("/post/create",[MovieController::class, "store"])->name("store");
Route::get("/post/edit/{phim}",[MovieController::class, "edit"])->name("edit");
Route::put("/post/edit/{phim}",[MovieController::class, "update"])->name("update");
Route::delete("/post/delete{phim}",[MovieController::class, "destroy"])->name("destroy");