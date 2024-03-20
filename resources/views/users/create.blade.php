@extends('layouts.app')

@section('content')
@if($errors->has('password'))
    <span class="alert alert-danger">{{ $errors->first('password') }}</span>
@endif
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold"> Thêm tài khoản</h3>
                <form action="{{ route('users.store') }}"  method="post">
                    @csrf
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tài khoản</span>
                        <input type="text" class="form-control" name="name"  >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Email</span>
                        <input type="email" class="form-control" name="email" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Mật khẩu</span>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Nhập lại mật khẩu</span>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
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
