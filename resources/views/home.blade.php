@extends("layout")

@section("tile","Thư viện sách")

@section("content")

    <!-- Trang chủ -->
    <div class="list-container">
        <h2>Trang chủ</h2>
        <p>Xin chào! Đây là trang chủ của chúng tôi.</p>
    </div>

    <!-- Trang danh sách -->
    @if (Auth::check() && Auth::user()->role=="admin")
        <div class="list-container">
            <h2>Thêm sửa xoá</h2>
                <tr>
                    <td><a href="{{ route('listMovie') }}" type="submit" class="list-item">CLICK ĐỂ THÊM SỬA XOÁ</a></td>
                    <td><a href="{{ route('thongke') }}" type="submit" class="list-item">CLICK ĐỂ XEM THỐNG KÊ</a></td>
                </tr>
        </div>
    @endif
    @if (Auth::check() && Auth::user()->role=="user")
    <?php $name=Auth::user()?>
        <div class="list-container">
            <h2>Wellcome</h2>
            <h4>Xin chào {{$name->fullname}}</h4>
        </div>
    @endif

    <!-- Trang Sản phẩm -->
    <div class="detail-container">
        <h2 class="detail-title">Phim</h2>
        <h2></h2>
        <form action="{{ route('searchName')}}" method="post">@csrf<input type="text" name="timkiem" placeholder="tìm kiếm theo tên" style="width: 240px; height: 25px;"></form>
        @foreach ($movie as $phim)
            
            <div class="khung">
                <a href="{{route('movie-detail', ['id' => $phim->id])}}">
                <img src="{{ asset('/storage/'.$phim->poster) }}" width="100%" alt="">
                <h3>{{$phim->title}}</h3></a>
                <p style="color: rgb(11, 80, 90)">giới thiệu: {{$phim->intro}}</p>
                <p>ngày công chiếu: {{$phim->release_date}}</p>
                <div class="corner-div"><a href="{{route('home', ['id' => $phim->genre_id])}}">{{$phim->gene->name}}</a></div>
            </div>
        @endforeach
        
    </div>
    @endsection