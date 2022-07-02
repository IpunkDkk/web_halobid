<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mitra::all();
        return view('mitra.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = Mitra::create($request->all());

        if ($simpan) {
            $data = Mitra::all();
            // return view('bidan.index', compact('data'));
            return redirect()->route('mitra.index', compact('data'));
        }
        else {
            return view('mitra.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mitra::find($id);
        return view('mitra.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mitra::where('id', $id)->first();
        return view('mitra.edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Mitra::where('id',$id)->first();
        $data->update($request->all());
        return redirect()->route('mitra.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Mitra::where('id', $id)->delete();
        if ($del) {
            $data = Mitra::all();
            return redirect()->route('mitra.index', compact('data'));
        }
    }
}
