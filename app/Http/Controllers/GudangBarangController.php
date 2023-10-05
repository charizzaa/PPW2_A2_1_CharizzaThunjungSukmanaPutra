<?php

namespace App\Http\Controllers;

use App\Models\GudangBarang;
use Illuminate\Http\Request;

class GudangBarangController extends Controller
{
    public function index()
    {
        // fungsi index
        $tabel_barang = GudangBarang::all();
        $tabel_barang_sort = GudangBarang::all()->sortByDesc('id');
        $no = 1;

        return view('gudangbarang.index', compact('tabel_barang'));
    }

    public function create(){
        //
    }

    public function store(){
        //
    }

    public function destroy(){
        //
    }

    public function update(){
        //
    }

    public function updatedata(){
        //
    }

    public function show($id){
        $tabel_barang = GudangBarang::find($id);
        return view('gudangbarang.show', compact('tabel_barang'));
    }
}
