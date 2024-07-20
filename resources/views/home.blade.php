@extends("layout")

@section("tile","Thư viện sách")

@section("content")

    <!-- Trang chủ -->
    <div class="list-container">
        <h2>Trang chủ</h2>
        <p>Xin chào! Đây là trang chủ của chúng tôi.</p>
    </div>

    <!-- Trang danh sách -->
    <div class="list-container">
        <h2>Danh sách các mục</h2>
        <div class="list-item">Mục 1</div>
        <div class="list-item">Mục 2</div>
        <div class="list-item">Mục 3</div>
    </div>

    <!-- Trang Sản phẩm -->
    <div class="detail-container">
        <h2 class="detail-title">Sản phẩm</h2>
        <h2></h2>
        <h2></h2>
        @foreach ($product as $book)
            <div class="khung">
                <img src="{{$book->thumbnail}}" alt="">
                <h3><a href="{{route('book-detail', ['id' => $book->id])}}">{{$book->title}}</a></h3>
                <p style="color: red">{{$book->Price}}$</p>
                <p>{{$book->name}}</p>
            </div>
        @endforeach
        
    </div>
    @endsection