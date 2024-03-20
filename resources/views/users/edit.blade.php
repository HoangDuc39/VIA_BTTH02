@extends('layouts.app')

@section('content')
@if($errors->has('current_password'))
    <span class="alert alert-danger">{{ $errors->first('current_password') }}</span>
@endif
@if($errors->has('password'))
    <span class="alert alert-danger">{{ $errors->first('password') }}</span>
@endif
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin tài khoản</h3>
                <form action="{{ route('users.update', $user->id) }}"  method="post">
                    @csrf
                     @method('PUT')
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">ID</span>
                        <input type="text" class="form-control" name="id" readonly value="{{ $user->id }}">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tài khoản</span>
                        <input type="text" class="form-control" name="name" value ="{{ $user->name }}" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Email</span>
                        <input type="email" class="form-control" name="email" value = "{{ $user->email }}">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Mật khẩu cũ</span>
                        <input type="password" class="form-control" name="current_password" value = "">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Mật khẩu mới</span>
                        <input type="password" class="form-control" name="password" value = "">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Nhập lại mật khẩu mới</span>
                        <input type="password" class="form-control" name="password_confirmation" >
                    </div>
                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href="{{ route('users.index') }}" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
