<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = layanan::all();
        return view('layanan.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layanan.create');
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
        $simpan = Layanan::create($request->all());

        if ($simpan) {
            $data = Layanan::all();
            // return view('bidan.index', compact('data'));
            return redirect()->route('layanan.index', compact('data'));
        }
        else {
            return view('layanan.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Layanan::find($id);
        return view('layanan.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Layanan::where('id', $id)->first();
        return view('layanan.edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Layanan::where('id',$id)->first();
        $data->update($request->all());
        return redirect()->route('layanan.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Layanan::where('id', $id)->delete();
        if ($del) {
            $data = Layanan::all();
            return redirect()->route('layanan.index', compact('data'));
        }
    }
}
