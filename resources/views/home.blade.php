@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Selamat Datang') }}</div>

                <div class="card-body" style="background:green; color:white;">
                <div class="jumbotron">
                <h1 class="display-4">Tani Mart</h1>
                <p class="lead">Tanimart adalah sebuah platform daring yang bertujuan untuk menghubungkan petani, penjual produk pertanian, dan konsumen yang peduli dengan pertanian berkelanjutan. Website Tanimart didesain dengan tujuan untuk menciptakan lingkungan perdagangan yang adil dan berkelanjutan bagi semua pihak yang terlibat dalam rantai pasok pertanian.</p>
                <hr class="my-4">
                </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Kamu sudah login') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
