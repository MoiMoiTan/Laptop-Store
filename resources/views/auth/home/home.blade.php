@extends('layouts.app')

@section('title', 'Trang chủ - Laptop Store')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chào mừng đến với Laptop Store</div>

                <div class="card-body">
                    <h2>Sản phẩm nổi bật</h2>
                    <!-- Hiển thị một số sản phẩm nổi bật ở đây -->
                    
                    <h2>Danh mục sản phẩm</h2>
                    <!-- Hiển thị danh sách danh mục sản phẩm ở đây -->
                    
                    <a href="{{ route('login') }}" class="btn btn-primary">Đăng nhập</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Đăng ký</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
