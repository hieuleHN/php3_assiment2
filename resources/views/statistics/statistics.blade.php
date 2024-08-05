@extends("layout")

@section("tile","Thống kê")

@section("content")
<h1>thống kê phim</h1>

<style>
    table, th, td {  
    border: 1px solid black;  
    border-collapse: collapse;
    text-align: center;  
    }  
    th, td {  
        padding: 10px;  
    }  
</style>
<table>
    <thead>
        <tr>
            <th>tổng số phim</th>
            <th>tổng phim kinh dị</th>
            <th>tổng phim tình cảm</th>
            <th>tổng phim hài hước</th>
            <th>tổng phim viễn tưởng</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$tong_so_phim}}</td>
            <td>{{$tong_so_phim_id1}}</td>
            <td>{{$tong_so_phim_id2}}</td>
            <td>{{$tong_so_phim_id3}}</td>
            <td>{{$tong_so_phim_id4}}</td>
        </tr>
    </tbody>
</table>

<h1>thống kê account</h1>
<table>
    <thead>
        <tr>
            <th>tổng tài khoản</th>
            <th>tổng tài khoản được kích hoạt</th>
            <th>tổng tài khoản ngừng kích hoạt</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$tong_account}}</td>
            <td>{{$tong_account_kich_hoat}}</td>
            <td>{{$tong_account_ngung_kich_hoat}}</td>
        </tr>
    </tbody>
</table>

@endsection