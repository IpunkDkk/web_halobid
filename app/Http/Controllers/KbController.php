<?php

namespace App\Http\Controllers;

use App\Models\Kb;
use App\Models\Pantaukb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KbController extends Controller
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
        if (Auth::user()->role->role == 'superadmin'){
            $data = Kb::all();
        }else{
            $data = Kb::all()->where('posyandu_id','==', Auth::user()->posyandu->id);
        }
        return view('kb.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan = Kb::create($request->all());

        if ($simpan) {
            $data = Kb::all();
            return redirect()->route('kb.index', compact('data'));
        }
        else {
            return view('kb.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kb  $kb
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kb::find($id);
        $pantau = Pantaukb::where('kb_id', $id)->get();
        // $date = date('Y:m:d H:i:s',strtotime($pantau[0]->created_at));
        return view('kb.show', compact(['data', 'pantau']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kb  $kb
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kb::where('id', $id)->first();
        return view('kb.edit',compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kb  $kb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Kb::where('id',$id)->first();
        $data->update($request->all());
        return redirect()->route('kb.show', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kb  $kb
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Kb::where('id', $id)->delete();
        if ($del) {
            $data = Kb::all();
            return redirect()->route('kb.index', compact('data'));
        }
    }
}
