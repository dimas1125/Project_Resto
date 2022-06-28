@extends('layouts.manajermain')
@section('content')
    <h1>Laporan Transaksi</h1>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
<a href="" class="btn btn-primary" onclick="window.print()">Print</a>
    <table class="table table-striped table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama pelanggan</th>
                <th>Menu</th>
                <th>Jumlah pesanan</th>
                <th>Harga Total</th>
                <th>Nama kasir</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($menus as $menu) --}}
            @forelse($trans as $tran)
            <tr>
                <th>{{ ++$i }}</th>
                <td>{{ $tran->customer }}</td>
                <td>{{ $tran->name}}</td>
                <td>{{ $tran->jumlah }}</td>
                <td>{{ $tran->total }}</td>
                <td>{{ $tran->kasir }}</td>
            </tr>
            @empty
            <tr>
                <td><td colspan="6" align="center">No Record(s) Found!</td></td>
            </tr>
            
            <script>
                window.print()
            </script>

            @endforelse
        </tbody>
    </table>
@endsection