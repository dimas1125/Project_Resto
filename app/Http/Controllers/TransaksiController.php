<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\models\Menu;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trans = Transaksi::with('menu')->paginate(10);
        return view('manajer.laporan', compact('trans', $trans))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();

        return view('kasir.create', compact('menus', $menus));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer' => 'required',
            'jumlah' => 'required',
            'kasir' => 'required',
            'menu_id' => 'required',
        ]);

        $validatedData['name'] = Menu::find($request->menu_id)->name;

        $validatedData['total'] = Menu::find($request->menu_id)->harga * $request->jumlah;

        // return $validatedData;
        
        Transaksi::create($validatedData);

        return redirect('/createtran')->with('success', 'Transaksi Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $data = Transaksi::find($id);
        $data->delete();

        return redirect('/listmenu')->with('success', 'Berhasil menghapus menu!');
    }
}
