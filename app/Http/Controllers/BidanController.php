<?php

namespace App\Http\Controllers;

use App\Models\Bidan;
use Illuminate\Http\Request;

class BidanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bidan::all();
        // dd($data);
        return view('bidan.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bidan.create');
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
        $simpan = Bidan::create($request->all());

        if ($simpan) {
            $data = Bidan::all();
            // return view('bidan.index', compact('data'));
            return redirect()->route('bidan.index', compact('data'));
        }
        else {
            return view('bidan.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bidan  $bidan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Bidan::find($id);
        return view('bidan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bidan  $bidan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Bidan::where('id', $id)->first();
        return view('bidan.edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bidan  $bidan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Bidan::where('id',$id)->first();
        $data->update($request->all());
        return redirect()->route('bidan.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bidan  $bidan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Bidan::where('id', $id)->delete();
        if ($del) {
            $data = Bidan::all();
            return redirect()->route('bidan.index', compact('data'));
        }
    }
}
