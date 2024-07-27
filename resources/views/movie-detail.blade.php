@extends("layout")

@section("tile","chi tiết sách")

@section("content")
<h1>Phần chi tiết phim</h1>
<hr>
@foreach ($movie as $detail)
    <div>
            <h3>Tiêu đề: {{$detail->title}}</h3>
        <div><img src="{{ asset('/storage/'.$detail->poster) }}" width="50%" alt=""></div><br>
        <b>Giới thiệu phim:</b>
        <p>{{$detail->intro}}</p><br>
        <b>Ngày công chiếu:</b>
        <p>{{$detail->release_date}}</p>

        <form action="" method="post">
            @csrf
            <button style="background-color: rgb(228, 44, 44); padding: 20px; color: white; font-size: 30px">đặt vé</button>
        </form>
    </div>
@endforeach
@endsection