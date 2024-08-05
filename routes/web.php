<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Middleware\AdminMiddleware;
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

//đăng ký đăng nhập
Route::middleware(AdminMiddleware::class)->group(function(){
    //phải thông qua Middleware tức là đăng nhập mới dc sử dụng những thứ trong này
    Route::get('/list',[LoginController::class, "listAccount"])->name("listAccount");
    
});
//login register
Route::get('/login',[LoginController::class, "login"])->name("login");
Route::post('/login',[LoginController::class, "postLogin"])->name("postLogin");
Route::get('/logout',[LoginController::class, "logout"])->name("logout");
Route::get('/register',[LoginController::class, "register"])->name("register");
Route::post('/register',[LoginController::class, "postRegister"])->name("postRegister");
Route::get('/update{user}',[LoginController::class, "update"])->name("account_update");
Route::put('/update{user}',[LoginController::class, "postUpdate"])->name("postUpdate");
Route::post("/delete{user}",[LoginController::class, "delete"])->name("delete");

Route::get('/user/list',[LoginController::class, "user_list"])->name("user_list");
Route::get('/user_update{user}',[LoginController::class, "user_update"])->name("user_update");
Route::get("/account",[LoginController::class, "account"])->name("account");
//end account





Route::get("/listMovie",[MovieController::class, "list"])->name("listMovie");
Route::post("/listMovie",[MovieController::class, "listPost"])->name("listPost");

Route::get("/",[MovieController::class, "index"])->name("movie.index");
Route::get("/home{id}",[MovieController::class, "movie_genre"])->name("home");
Route::post("/home",[MovieController::class, "search"])->name("searchName");
//chi tiết sản phẩm
Route::get("/movie-detail{id}",[MovieController::class, "movie_detail"])->name("movie-detail");


Route::get("/Tickets",[MovieController::class, "Tickets"])->name("Tickets");
Route::get("/thongke",[MovieController::class, "thongke"])->name("thongke");











Route::get("/post/create",[MovieController::class, "create"])->name("create");
Route::post("/post/create",[MovieController::class, "store"])->name("store");
Route::get("/post/edit/{phim}",[MovieController::class, "edit"])->name("edit");
Route::put("/post/edit/{phim}",[MovieController::class, "update"])->name("update");
Route::delete("/post/delete{phim}",[MovieController::class, "destroy"])->name("destroy");