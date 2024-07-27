<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("tile")</title>
    <style>
        /* CSS cho trang chủ */
            body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            }
            header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            }
            nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
            }
            nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 20px;
            }

            /* CSS cho trang danh sách */
            .list-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            height: 150px;
            }
            .list-item {
            padding: 10px;
            border: 1px solid #706f6f;
            border-radius: 3px;
            text-align: center;
            text-decoration: none;
            color: black;
            }
            .list-item:hover{
            background-color: rgb(137, 5, 5);
            color: #fff;
            font-size: 16px;
            }

            /* CSS cho trang chi tiết */
            .detail-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 10px
            }
            .detail-title {
            font-size: 24px;
            margin-bottom: 10px;
            }
            .khung{
                padding: 10px;
                margin-top: 10px;
                position: relative;
            }
            .corner-div {
                position: absolute;
                top: 0;
                right: 0;
                background-color: rgb(246, 25, 25);
                padding: 3px;
            }
            .corner-div a{
                color: white;
                text-decoration: none;
            }

            
            /* .box{
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 
            } */
            .left-box {
            width: 85%;
            background-color: #f0f0f0;
            float: left;
            }

            .right-box {
                width: 15%;
                background-color: #ddd;
                float: left;
            }
            .right-box h2{
                padding: 10px

            }
            .right-box a{
                text-decoration: none;
                display: grid;
                grid-template-columns: 1fr 1fr;
                padding: 10px;
                margin-left: 30px
            }
            aside{
                clear: both;
            }
            footer {
                clear: both;
            }
    </style>
</head>
<body>
    <header>
        <h1>Trang Web Mẫu</h1>
    </header>
    <nav>
        <a href="/">Trang chủ</a>
        <a href="/danh-sach">Sản phẩm</a>
        <a href="/chi-tiet/1">Hỏi đáp</a>
        <a href="/chi-tiet/1">Liên hệ</a>
        <a href="/chi-tiet/1">Tài khoản</a>
    </nav>
    <article>
        <div class="box">
            <div class="left-box">@yield("content")</div>
        <div class="right-box"><h2 style="color: black">danh sách</h2>
            @foreach ($theloai as $book)
                <hr><a href="{{route('home', ['id' => $book->id])}}" style="color: #252222">{{$book->name}}</a>
            @endforeach</div>
        </div>
    </article>
    <aside>Aside</aside>
    <footer>Footer</footer>
</body>
</html>