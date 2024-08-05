@extends("layout")

@section("tile","chi tiết vé")

@section("content")

<a href="{{ route('logout') }}">logout</a>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>fullname</th>
            <th>username</th>
            <th>email</th>
            <th>password</th>
            <th>avatar</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->fullname}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td><img src="{{ asset('/storage/'.$user->avatar) }}" width="50" alt=""></td>
                <td><a href="{{ route('user_update',$user) }}">Sửa</a></td>
            </tr>
    </tbody>
</table>
@endsection