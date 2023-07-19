<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index() : View {
        $page = 'stok';
        $barang = Barang::all();

        return view('admin.contents.stok.stok', ['page' => $page, 'list_barang' => $barang]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = 'stok';

        return view('admin.contents.stok.stok-create', ['page' => $page]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'         => ['required'],
            'qty'          => ['required'],
            'price'          => ['required'],
        ]);

        $dataBarang = array(
            'name'   => $request->post('name'),
            'qty'    => $request->post('qty'),
            'price'    => $request->post('price'),
        );

        $create = Barang::create($dataBarang);

        if ( !$create ) {
            echo "error create";exit;
        }
 
        return redirect()->route('stok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
