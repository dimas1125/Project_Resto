@extends('layouts.manajermain')
@section('content')
    <h1>Tambah Daftar Menu</h1>

    <form action="{{ route('menus.store') }}" method="post">
        @csrf
        <input type="text" name="name" value="{{ old('name') }}" placeholder="nama menu" class="form-control w-50" required autocomplete="off"><br>
        <input type="number" name="harga" value="{{ old('harga') }}" placeholder="harga" class="form-control w-50" required autocomplete="off"><br>
        <input type="number" name="stok" value="{{ old('stok') }}" placeholder="stok" class="form-control w-50"><br>
        <button type="submit" class="btn btn-primary">Buat menu baru</button>
    </form>

@endsection