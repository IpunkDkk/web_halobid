<?php

namespace App\Http\Controllers;

use App\Models\Persalinan;
use Illuminate\Http\Request;

class PersalinanController extends Controller
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
        $data = Persalinan::all();
        return view('persalinan.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persalinan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = Persalinan::create($request->all());

        if ($simpan) {
            $data = Persalinan::all();
            return redirect()->route('persalinan.index', compact('data'));
        }
        else {
            return view('persalinan.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persalinan  $persalinan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $data = Persalinan::find($id);
        return view('persalinan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persalinan  $persalinan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Persalinan::where('id', $id)->first();
        return view('persalinan.edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persalinan  $persalinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Persalinan::where('id',$id)->first();
        $data->update($request->all());
        return redirect()->route('persalinan.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persalinan  $persalinan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Persalinan::where('id', $id)->delete();
        if ($del) {
            $data = Persalinan::all();
            return redirect()->route('persalinan.index', compact('data'));
        }
    }
}
