@extends('layouts.manajermain')
@section('content')
    <h1>Edit menu</h1>
    <form action="{{ route('menus.update',$menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $menu->name }}"><br>
        <input type="text" name="harga" value="{{ $menu->harga }}"><br>
        <input type="text" name="ket" value="{{ $menu->stok }}"><br>
        <button type="submit">Edit Menu</button>
    </form>
    <a href="{{ route('menus.index') }}">Kembali</a>
@endsection