<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Antrian::all();
        return view('antrian.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posyandu = Posyandu::all();
        return view('antrian.create', compact(['posyandu']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = Antrian::create($request->all());

        if ($simpan) {
            $data = Antrian::all();
            return redirect()->route('antrian.index', compact('data'));
        }
        else {
            return view('antrian.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Antrian::find($id);
        return view('antrian.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Antrian::where('id', $id)->first();
        return view('antrian.edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Antrian::where('id',$id)->first();
        $data->update($request->all());
        return redirect()->route('antrian.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Antrian::where('id', $id)->delete();
        if ($del) {
            $data = Antrian::all();
            return redirect()->route('antrian.index', compact('data'));
        }
    }
}
