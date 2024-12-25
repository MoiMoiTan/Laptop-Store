@extends('layouts.app')

@section('title', 'Welcome to Admin Dashboard')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chào mừng đến với phần tổng quan Store</div>
                        <div class="card-body">
                            <h2>Xin chào</h2> <span> Ở đây chúng tôi bán mọi loại thiết bị điện tử. Từ Laptop, Pc, Gears,... cho đến build case theo yêu cầu</span>
                        </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.950955984453!2d105.79091097616788!3d21.03464828757459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aba96f217171%3A0x4a209c266872199a!2zQ1RNIDI5OSBD4bqmVSBHSeG6pFk!5e0!3m2!1svi!2s!4v1730124347661!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
