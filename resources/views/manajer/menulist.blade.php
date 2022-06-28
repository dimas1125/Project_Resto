@extends('layouts.manajermain')
@section('content')
    <h1>Daftar Menu</h1>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-striped table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama menu</th>
                <th>Harga/porsi</th>
                <th>Stok</th>
                <th style="text-align: center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($menus as $menu) --}}
            @forelse($menus as $menu)
            <tr>
                <th>{{ ++$i }}</th>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->harga }}</td>
                <td>{{ $menu->stok }}</td>
                <td style="text-align: center">
                    <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary">edit</a>
                    |
                    <a href="{{ "menudelete/".$menu->id }}" class="btn btn-danger">hapus</a>
                </td>
            </tr>
            @empty
            <tr>
                <td><td colspan="6" align="center">No Record(s) Found!</td></td>
            </tr>

            @endforelse
        </tbody>
    </table>
@endsection