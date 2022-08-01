<?php

namespace App\Http\Controllers;

use App\Models\Pantaukb;
use Illuminate\Http\Request;

class PantaukbController extends Controller
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
        $data = Pantaukb::all();
        return view('kb.show', compact(['data']));
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
        $simpan = Pantaukb::create($request->all());
        if ($simpan) {
            return redirect()->route('kb.show',$request->kb_id);
        }
        else {
            return view('kb.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pantaukb  $pantaukb
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $data = $id;
        return view('kb.pantau.create', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pantaukb  $pantaukb
     * @return \Illuminate\Http\Response
     */
    public function edit(Pantaukb $pantaukb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pantaukb  $pantaukb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pantaukb $pantaukb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pantaukb  $pantaukb
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Pantaukb::where('id', $id)->delete();
        if ($del) {
            $data = Pantaukb::all();
            return redirect()->route('kb.index', compact('data'));
        }
    }
}
