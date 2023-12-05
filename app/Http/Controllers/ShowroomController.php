<?php

namespace App\Http\Controllers;

use App\Models\showroom_mobil;
use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    //
    public function create()
    {
        return view('showroom.create');
    }

    public function store()
    {
        $data = request()->all();
            showroom_mobil :: create([
            'nama_mobil' => $data['required'],
            'brand_mobil' => $data[''],
            'warna_mobil' => $data['warna_mobil'],
            'tipe_mobil' => $data['tipe_mobil'],
            'harga_mobil' => $data['harga_mobil'],
            ]);
            return redirect(route('showroom.index'));
    }

    public function index(){
        $mobil = showroom_mobil::all();
        return view ('showroom.index', compact('mobil'));
    }
}
