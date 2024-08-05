<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container w-50">
        <h1>Update user</h1>
        <div class="mb-3">
            <a href="{{ route('listAccount') }}">List</a>
        </div>
        <form action="{{ route('postUpdate',$user) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Fullname</label>
                <input type="text" name="fullname" value="{{$user->fullname}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" name="username" value="{{$user->username}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" value="{{$user->password}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">avatar</label>
                <input type="file" name="image" class="form-control">
                <img src="{{ asset('/storage/'.$user->avatar) }}" width="100" alt="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">active</label>
                @if ($user->active==1)
                    <input type="radio" name="active" value="1" checked> kích hoạt
                    <input type="radio" name="active" value="0" > ngừng kích hoạt
                @endif
                @if ($user->active==0)
                    <input type="radio" name="active" value="1" > kích hoạt
                    <input type="radio" name="active" value="0" checked> ngừng kích hoạt
                @endif
            </div>
            {{-- <div class="mb-3">
                <label for="" class="form-label">phần quyền</label>
                @if ($user->role=="user")
                    <input type="radio" name="active" value="1" checked> kích hoạt
                    <input type="radio" name="active" value="0" > ngừng kích hoạt
                @endif
                @if ($user->role=="admin")
                    <input type="radio" name="active" value="1" > kích hoạt
                    <input type="radio" name="active" value="0" checked> ngừng kích hoạt
                @endif
            </div> --}}
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">update</button>
            </div>
        </form>
    </div>
</body>
</html>