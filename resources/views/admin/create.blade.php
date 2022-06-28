@extends('layouts.main')
@section('content')
<h1>Tambah Akun Resto</h1>
<form action="/register" method="post">
    @csrf
    <input type="text" name="name" autofocus placeholder="Nama pengguna" class="form-control w-50"><br>
    <input type="text" name="username" autofocus placeholder="Username" class="form-control w-50"><br>
    <input type="password" name="password" autofocus placeholder="Password" class="form-control w-50"><br>
    <select name="role" class="form-select w-50" aria-label="Default select example">
        <option value="admin">Admin</option>
        <option value="manajer">Manajer</option>
        <option value="kasir">Kasir</option>
    </select>

    <br>
    <button type="submit" class="btn btn-primary"> Buat akun baru</button>
</form>
@endsection