@extends('layouts.app')

@section('content')
@if(session('success'))
        <div id ="success-alert" class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <a href="{{ route('users.create') }}" class="btn btn-success mt-3">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên tài khoản</th>
                            <th scope="col">Email</th>
                            <!-- <th scope="col">Mật khẩu</th> -->
                            <th scope="col">Created</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($users) > 0)
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td> {{$user->name}}</td>
                            <td> {{$user->email}}</td>
                            <!-- <td>{{$user->password}}</td> -->
                            <td>{{$user->created_at}}</td>
                            <td><a href="{{ route('users.edit', $user->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td>
                            <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('Are you sure you want to delete this user?')" />
                            </form>
                            </td>
                        </tr>

                        @endforeach
                         @endif
                    </tbody>

                </table>
            </div>
        </div>
    </main>

    @endsection
