@extends("layout")

@section("tile","Thư viện phim")

@section("content")
@if (session('message'))
        <div class="alert">
            {{session("message")}}    
        </div>
        
    @endif
    <h1>thêm mới bài viết</h1>
    <a href="{{route("listMovie")}}">List</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Poster</th>
            <th>Intro</th>
            <th>Release_date</th>
            <th>Genre_id</th>
            <th>
                <a href="{{ route('create') }}">Thêm mới</a>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="{{ route('listPost') }}" method="post">
            @csrf
            <input type="text" name="timkiem" placeholder="tìm kiếm theo tên">
        </form>
        @foreach ($movie as $phim)
            <tr>
                <td>{{$phim->id}}</td>
                <td>{{$phim->title}}</td>
                <td><img src="{{ asset('/storage/'.$phim->poster) }}" width="50" alt=""></td>
                <td>{{$phim->intro}}</td>
                <td>{{$phim->release_date}}</td>
                <td>{{$phim->genre_id}}</td>
                <td>
                    <a href="{{ route('edit', $phim) }}">Sửa</a>
                    <form action="{{route("destroy",$phim)}}" method="post">
                        @csrf 
                        @method("DELETE")
                        <button onclick="return confirm('bạn có muốn xoá không')" type="submit">xoá</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection