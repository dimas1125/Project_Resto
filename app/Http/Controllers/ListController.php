<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function index()
    {
        $akuns = User::latest()->paginate(5);

        return view('admin.list', compact('akuns'))->with('i', (request()->input('page', 1) -1) *5);
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/list')->with('success', 'Akun berhasil dihapus!');
    }
}
