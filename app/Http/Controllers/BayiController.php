<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use App\Models\Pantaubayi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BayiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role->role == 'superadmin'){
            $data = Bayi::all();
//            dd
        }else{
            $data = Bayi::all()->where('posyandu_id','==', Auth::user()->posyandu->id);
        }
        return view('bayi.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bayi.create');
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
        $simpan = Bayi::create($request->all());

        if ($simpan) {
            $data = Bayi::all();
            return redirect()->route('bayi.index', compact('data'));
        }
        else {
            return view('bayi.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Bayi::find($id);
        $pantau = Pantaubayi::where('bayi_id', $id)->get();
        // $date = date('Y:m:d H:i:s',strtotime($pantau[0]->created_at));
        // dd($date);
        return view('bayi.show', compact(['data', 'pantau']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Bayi::where('id', $id)->first();
        return view('bayi.edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Bayi::where('id',$id)->first();
        $data->update($request->all());
        return redirect()->route('bayi.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Bayi::where('id', $id)->delete();
        if ($del) {
            $data = Bayi::all();
            return redirect()->route('bayi.index', compact('data'));
        }
    }
}
