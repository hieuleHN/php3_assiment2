<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gene;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    public function index(){
        $movie=Movie::all();
        $theloai=Gene::all();
        return view("home",compact("movie","theloai"));
    }
    public function movie_genre($id){
        $movie=Movie::query()->where("genre_id","=",$id)->get();
        $theloai=Gene::all();
        return view("home",compact("movie","theloai"));
    }
    public function movie_detail($id){
        $movie=Movie::query()->where("id","=",$id)->get();
        $theloai=Gene::all();
        return view("movie-detail",compact("movie","theloai"));
    }
    public function list(){
        $movie=Movie::all();
        $theloai=Gene::all();
        return view("admin.movie.ListMovie",compact("movie","theloai"));
    }
    public function listPost(Request $request){
        $timkiem=$request["timkiem"];
        $movie=Movie::query()->where("title","LIKE",'%'.$timkiem.'%')->get();
        $theloai=Gene::all();
        return view("admin.movie.ListMovie",compact("movie","theloai"));
    }
    public function search(Request $request){
        $timkiem=$request["timkiem"];
        $movie=Movie::query()->where("title","LIKE",'%'.$timkiem.'%')->get();
        $theloai=Gene::all();
        return view("home",compact("movie","theloai"));
    }
    public function create(){
        $gene=Gene::all();
        $theloai=Gene::all();
        return view("admin.movie.create",compact("gene","theloai"));
    }
    public function store(Request $request){
        $data = $request->except("image");
        $data["poster"]="";
        if($request->hasFile("image")){
            $path_image = $request->file("image")->store("poster");
            $data["poster"]=$path_image;
        }
        Movie::query()->create($data);
        return redirect()->route("listMovie")->with("message","thêm dữ liệu thành công");
    }
    public function destroy(Movie $phim){
        $phim->delete();
        return redirect()->route("listMovie")->with("message","xoá phim thành công");
    }
    public function edit(Movie $phim){
        $theloai=Gene::all();
        return view("admin.movie.edit",compact("phim","theloai"));
    }
    public function update(Request $request, Movie $phim){
        $data = $request->except("image");
        $old_image=$phim->poster;
        $data["poster"]=$old_image;
        //kiểm tra file
        if($request->hasFile("image")){
            $path_image = $request->file("image")->store("poster");
            $data["poster"]=$path_image;
        }
        //update vào data
        $phim->update($data);
        //xoá ảnh cũ
        if($request->hasFile("image")){
            if(file_exists("storage/".$old_image)){
                unlink("storage/".$old_image);
            }
        }
        return redirect()->back()->with("message","cập nhật liệu thành công");//back dùng để dữ lại trang
    }

    //thống kê
    public function thongke(){
        $theloai=Gene::all();
        $thongke=Movie::all();
        $tong_so_phim=$thongke->count("title");
        $tong_so_phim_id1=$thongke->where("genre_id","=",1)->count("genre_id");
        $tong_so_phim_id2=$thongke->where("genre_id","=",2)->count("genre_id");
        $tong_so_phim_id3=$thongke->where("genre_id","=",3)->count("genre_id");
        $tong_so_phim_id4=$thongke->where("genre_id","=",4)->count("genre_id");
        $account=User::all();
        $tong_account=$account->count("id");
        $tong_account_kich_hoat=$account->where("active","=",1)->count("active");
        $tong_account_ngung_kich_hoat=$account->where("active","=",0)->count("active");
        return view("statistics.statistics"
        ,compact("theloai","tong_so_phim","tong_so_phim_id1","tong_so_phim_id2","tong_so_phim_id3","tong_so_phim_id4",
        "tong_account","tong_account_kich_hoat","tong_account_ngung_kich_hoat"));
    }

    //đặt vé
    public function Tickets(){
        if(Auth::check()){
            $theloai=Gene::all();
            return view("admin.Tickets.Tickets",compact("theloai"));
        }
        return redirect()->route("login");
    }
}
