@extends('layouts.kasirmain')
@section('content')

    <div class="mb-5">
        <h1>Tambah Transaksi</h1>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="kasirtran" method="post">
        @csrf
        @method('GET')
        <div class="mb-2">
            <label for="cs">Nama Pelanggan</label>
            <input type="text" class="form-control w-50" name="customer" id="cs" value="{{ old('customer') }}" required autocomplete="off" autofocus>
        </div>
        <div class="mb-2">
            <label for="cs">Menu</label>
            <select name="menu_id" class="form-select w-50">
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-2">
            <label for="cs">Jumlah</label>
            <input type="number" class="form-control w-50" name="jumlah" value="{{ old('jumlah') }}" id="cs" required autocomplete="off">
        </div>
        <div class="mb-2">
            <label for="cs">Nama kasir</label>
            <input type="text" class="form-control w-50" name="kasir" value="{{ old('nama_kasir') }}" id="cs" required autocomplete="off">
        </div>
        <div class="mt-3">
            <button type="btn" class="btn btn-primary">Buat pesanan</button>
        </div>
    </form>
    
@endsection