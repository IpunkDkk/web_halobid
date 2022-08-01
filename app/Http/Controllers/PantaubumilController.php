<?php

namespace App\Http\Controllers;

use App\Models\Bumil;
use App\Models\Pantaubumil;
use Illuminate\Http\Request;

class PantaubumilController extends Controller
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
        $data = Pantaubumil::all();
        return view('bumil.show', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        dd($id);
        return view('pantau.create');
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
        $simpan = Pantaubumil::create($request->all());
        if ($simpan) {
            return redirect()->route('bumil.show',$request->bumil_id);
        }
        else {
            return view('pantau.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pantaubumil  $pantaubumil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $data = $id;
        return view('bumil.pantau.create', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pantaubumil  $pantaubumil
     * @return \Illuminate\Http\Response
     */
    public function edit(Pantaubumil $pantaubumil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pantaubumil  $pantaubumil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pantaubumil $pantaubumil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pantaubumil  $pantaubumil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Pantaubumil::where('id', $id)->delete();
        if ($del) {
            $data = Pantaubumil::all();
            return redirect()->route('bumil.index', compact('data'));
        }
    }
}
