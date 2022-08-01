<?php

namespace App\Http\Controllers;

use App\Models\Pantaubayi;
use Illuminate\Http\Request;

class PantaubayiController extends Controller
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
        $data = Pantaubayi::all();
        return view('bayi.show', compact(['data']));
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
        $simpan = Pantaubayi::create($request->all());
        if ($simpan) {
            return redirect()->route('bayi.show',$request->bayi_id);
        }
        else {
            return view('pantau.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pantaubayi  $pantaubayi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        $data = $id;
        return view('bayi.pantau.create', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pantaubayi  $pantaubayi
     * @return \Illuminate\Http\Response
     */
    public function edit(Pantaubayi $pantaubayi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pantaubayi  $pantaubayi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pantaubayi $pantaubayi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pantaubayi  $pantaubayi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Pantaubayi::where('id', $id)->delete();
        if ($del) {
            $data = Pantaubayi::all();
            return redirect()->route('bayi.index', compact('data'));
        }
    }
}
