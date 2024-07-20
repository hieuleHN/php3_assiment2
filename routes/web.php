<?php

use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', function () {
    $theloai=DB::table('categories')->get();

    $product=DB::table("books")
    ->join("categories","books.Category_id","=","categories.id")->select("books.*","categories.name")
    ->get();

    return view("home",compact("theloai","product"));
});
Route::get('/home/{id}', function ($id) {
    $theloai=DB::table('categories')->get();

    $product=DB::table("books")
    ->join("categories","books.Category_id","=","categories.id")->select("books.*","categories.name")
    ->where("Category_id","=",$id)->get();

    return view("home",compact("theloai","product"));
})->name("home");

Route::get("/layout",function(){
    $theloai=DB::table('categories')->get();

    return view("layout",compact("theloai",));
});

Route::get("/book-detail/{id}",function($id){
    $Book=DB::table('books')->where("id","=",$id)->get();
    $theloai=DB::table('categories')->get();
    return view("book-detail",compact("Book","theloai"));
})->name("book-detail");
