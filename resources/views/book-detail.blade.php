@extends("layout")

@section("tile","chi tiết sách")

@section("content")
<h1>Phần chi tiết sản phẩm</h1>
<hr>
@foreach ($Book as $detail)
    <div>
            <h3>{{$detail->title}}</h3>
        <div><img src="{{$detail->thumbnail}}" width="100" alt=""></div>
        <p>{{$detail->Price}}</p>
        <p>{{$detail->author}}</p>
        <p>{{$detail->publisher}}</p>
        <p>{{$detail->Publication}}</p>

    </div>
@endforeach
@endsection