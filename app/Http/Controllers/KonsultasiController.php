<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Konsultasi::all();
        // dd($data);
        return view('konsultasi.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = Konsultasi::all();
        $bidan = Konsultasi::all();
        $layanan = Konsultasi::all();
        return view('konsultasi.create', compact('pasien', 'bidan', 'layanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = Konsultasi::create($request->all());

        if ($simpan) {
            $data = Konsultasi::all();
            return redirect()->route('konsultasi.index', compact('data'));
        }
        else {
            return view('konsultsai.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Konsultasi::with('pasien')->first();
        $data = Konsultasi::with('bidan')->first();
        $data = Konsultasi::with('layanan')->first();
        // dd($data);
        return view('konsultasi.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
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
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Konsultasi  $konsultasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
