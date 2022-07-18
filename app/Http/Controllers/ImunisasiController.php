<?php

namespace App\Http\Controllers;

use App\Models\Imunisasi;
use Database\Seeders\ImunisasiSeeder;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Imunisasi::all();
        return view('imunisasi.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imunisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request->all());
         $simpan = Imunisasi::create($request->all());

         if ($simpan) {
             $data = Imunisasi::all();
             return redirect()->route('imunisasi.index', compact('data'));
         }
         else {
             return view('imunisasi.create');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imunisasi  $imunisasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Imunisasi::find($id);
        return view('imunisasi.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imunisasi  $imunisasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Imunisasi::where('id', $id)->first();
        return view('imunisasi.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imunisasi  $imunisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Imunisasi::where('id',$id)->first();
        $data->update($request->all());
        return redirect()->route('imunisasi.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imunisasi  $imunisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Imunisasi::where('id', $id)->delete();
        if ($del) {
            $data = Imunisasi::all();
            return redirect()->route('imunisasi.index', compact('data'));
        }
    }
}
