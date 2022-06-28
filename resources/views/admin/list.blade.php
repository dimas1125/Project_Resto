@extends('layouts.main')
@section('content') 
    <h1>List akun</h1>
    
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
                <th>Nama</th>
                <th>Username</th>
                <th>Role</th>
                <th style="text-align: center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($akuns as $akun)
            <tr>
                <th>{{ ++$i }}</th>
                <td>{{ $akun->name }}</td>
                <td>{{ $akun->username }}</td>
                <td style="font-weight: 600">{{ $akun->role }}</td>
                <td style="text-align: center">
                    <a href="{{ "delete/".$akun->id }}" class="btn btn-danger">Hapus</a>
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