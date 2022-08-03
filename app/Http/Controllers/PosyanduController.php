<?php

namespace App\Http\Controllers;

use App\Models\Bidan;
use App\Models\Posyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role->role == 'superadmin'){
            $data = Posyandu::all();
        }else{
            $data = Posyandu::all()->where('id','==', Auth::user()->posyandu->id);
        }
        return view('posyandu.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidan = Bidan::all();
        return view('posyandu.create', compact('bidan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = Posyandu::create($request->all());

        if ($simpan) {
            $data = Posyandu::all();
            // return view('posyandu.index', compact('data'));
            return redirect()->route('posyandu.index', compact('data'));
        }
        else {
            return view('posyandu.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Posyandu::with('bidan')->first();
        // dd($data);
        return view('posyandu.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Posyandu::where('id', $id)->first();
        $bidan = Bidan::all();
        return view('posyandu.edit',compact(['data', 'bidan']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Posyandu::where('id',$id)->first();
        $data->update($request->all());
        return redirect()->route('posyandu.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Posyandu::where('id', $id)->delete();
        if ($del) {
            $data = Posyandu::all();
            return redirect()->route('posyandu.index', compact('data'));
        }
    }
}
