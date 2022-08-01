<?php

namespace App\Http\Controllers;

use App\Models\Laporanbayi;
use Illuminate\Http\Request;

class LaporanbayiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Laporanbayi::all();
        return view('laporan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporanbayi  $laporanbayi
     * @return \Illuminate\Http\Response
     */
    public function show(Laporanbayi $laporanbayi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporanbayi  $laporanbayi
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporanbayi $laporanbayi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporanbayi  $laporanbayi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporanbayi $laporanbayi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporanbayi  $laporanbayi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporanbayi $laporanbayi)
    {
        //
    }
}
