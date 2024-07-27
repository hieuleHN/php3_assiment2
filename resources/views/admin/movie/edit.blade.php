@extends("layout")

@section("tile","SỬA phim")

@section("content")
    <h1>cập nhật bài viết</h1>
    <a href="{{route("listMovie")}}">List</a>

    @if (session('message'))
        <div class="alert">
            {{session("message")}}    
        </div>
        
    @endif
    <form action="{{route("update",$phim)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="mb">
            <label for="form-label">Title</label>
            <input type="text" value="{{$phim->title}}" name="title">
        </div>
        <div class="mb">
            <label for="form-label">hình ảnh</label>
            <input type="file" name="image" id="">
            <img src="{{ asset('/storage/'.$phim->poster) }}" width="50" alt="">
        </div>
        <div class="mb">
            <label for="form-label">Giới thiệu</label>
            <textarea name="intro" id="" cols="30" rows="10">{{$phim->intro}}</textarea>
        </div>
        <div class="mb">
            <label for="form-label">Ngày công chiếu</label>
            <input type="datetime-local" name="release_date" value="{{$phim->release_date}}" id="">
        </div>
        <div class="mb">
            <label for="form-label">Thể loại</label>
            <select name="genre_id" id="">
                @foreach ($theloai as $cate)
                    <option value="{{$cate->id}}"@if ($phim->genre_id==$cate->id)
                        selected
                    @endif>
                        {{$cate->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb">
            <button type="submit">save</button>
        </div>
    </form>
    @endsection