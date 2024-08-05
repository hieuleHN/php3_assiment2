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
            <th>active</th>
            <th>PUT</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $account)
            <tr>
                <td>{{$account->id}}</td>
                <td>{{$account->fullname}}</td>
                <td>{{$account->username}}</td>
                <td>{{$account->email}}</td>
                <td>{{$account->password}}</td>
                <td><img src="{{ asset('/storage/'.$account->avatar) }}" width="50" alt=""></td>
                <td>
                    @if ($account->active==1)
                        <p>kích hoạt</p>
                    @endif
                    @if ($account->active==0)
                        <p>ngừng kích hoạt</p>
                    @endif
                </td>
                <td><a href="{{ route('account_update',$account) }}">Sửa</a></td>
                <td>
                    @if ($account->role=="user")
                        <form action="{{ route('delete',$account) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit">Xoá</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection