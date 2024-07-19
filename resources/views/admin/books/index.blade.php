<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Danh mục</title>
</head>
<body>
    <h1>Danh mục</h1>
    <table>
        <thead>
            <th>#ID</th>
            <th>Name</th>
            <th><a href="#">Thêm mới</a></th>
        </thead>
        <tr>
            @foreach ($categories as $cate)
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
                <td><a href="#">edit</a>
                <a href="#">delete</a></td>
            @endforeach
        </tr>
    </table>
</body>
</html>