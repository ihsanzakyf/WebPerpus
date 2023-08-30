@extends('layouts.main-layouts')

@section('title', 'Profile')
    
@section('content')
  <div class="mt-5 container">
    <h2>Log Penyewaan Kamu</h2>
    <x-rent-log-table :rentlog='$rentlog'/>
  </div>
@endsection
