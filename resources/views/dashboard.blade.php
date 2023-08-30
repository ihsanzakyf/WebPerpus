@extends('layouts.main-layouts')

@section('title', 'Dashboard')

@section('page-name', 'Dashboard')
    
@section('content')

<h1>Selamat Datang, {{ Auth::user()->username }}</h1>
      <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data buku">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journal-text"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="card-desc">Buku</div>
                        <div class="card-count">{{ $jumlahbuku }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data kategori">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="card-desc">Kategori</div>
                        <div class="card-count">{{ $kategori }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people-fill"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                        <div class="card-desc">User</div>
                        <div class="card-count">{{ $user }}</div>
                    </div>
                </div>
            </div>
        </div>

            <div class="mt-5 container">
                <h2>Log Penyewaan</h2>
                <x-rent-log-table :rentlog='$rentlog'/>
            </div>
@endsection
