@extends("layout")

@section("tile","SỬA phim")

@section("content")
    <h1>thêm mới bài viết</h1>
    <a href="{{route("listMovie")}}">List</a>

    <form action="{{route("store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb">
            <label for="form-label">Title</label>
            <input type="text" name="title">
        </div>
        <div class="mb">
            <label for="form-label">hình ảnh</label>
            <input type="file" name="image" id="">
        </div>
        <div class="mb">
            <label for="form-label">Giới thiệu</label>
            <textarea name="intro" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="mb">
            <label for="form-label">Ngày công chiếu</label>
            <input type="datetime-local" name="release_date" id="">
        </div>
        <div class="mb">
            <label for="form-label">Thể loại</label>
            <select name="genre_id" id="">
                @foreach ($gene as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb">
            <button type="submit">save</button>
        </div>
    </form>
    @endsection