<?php

namespace App\Http\Controllers;

use App\Models\Bumil;
use App\Models\Pantaubumil;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BumilController extends Controller
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
        $data = Bumil::all();
        return view('bumil.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = Bumil::create($request->all());
        if ($simpan) {
            $data = Bumil::all();
            return redirect()->route('bumil.index', compact('data'));
        }
        else {
            return view('bumil.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bumil  $bumil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Bumil::find($id);
        $pantau = Pantaubumil::where('bumil_id', $id)->get();
        // $date = date('Y:m:d H:i:s',strtotime($pantau[0]->created_at));
        // dd( $date );
        return view('bumil.show', compact(['data', 'pantau']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bumil  $bumil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Bumil::where('id', $id)->first();
        return view('bumil.edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bumil  $bumil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Bumil::where('id',$id)->first();
        $data->update($request->all());
        return redirect()->route('bumil.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bumil  $bumil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Bumil::where('id', $id)->delete();
        if ($del) {
            $data = Bumil::all();
            return redirect()->route('bumil.index', compact('data'));
        }
    }
}
