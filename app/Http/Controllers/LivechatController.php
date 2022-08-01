<?php

namespace App\Http\Controllers;

use App\Models\Livechat;
use Illuminate\Http\Request;

class LivechatController extends Controller
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
        // $data = Livechat::all();
        // return view('konsultasi.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livechat  $livechat
     * @return \Illuminate\Http\Response
     */
    public function show(Livechat $livechat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livechat  $livechat
     * @return \Illuminate\Http\Response
     */
    public function edit(Livechat $livechat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livechat  $livechat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livechat $livechat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livechat  $livechat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livechat $livechat)
    {
        //
    }
}
