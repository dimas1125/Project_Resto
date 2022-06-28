@extends('layouts.kasirmain')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard {{ auth()->user()->role }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Selamat Datang {{ auth()->user()->name }}</li>
        </ol>
    </div>
@endsection