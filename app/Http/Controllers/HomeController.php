<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Bayi;
use App\Models\Bidan;
use App\Models\Bumil;
use App\Models\Kb;
use App\Models\Posyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role->role == 'superadmin'){
            $posyandu = Posyandu::all()->count();
            $antrian = Antrian::all()->count();
            $bumil = Bumil::all()->count();
            $bayi = Bayi::all()->count();
            $kb = Kb::all()->count();
            $bidan = Bidan::all()->count();
        }else{
            $posyandu = 0;
            $antrian = Antrian::all()->where('posyandu_id','==', Auth::user()->posyandu->id)->count();
            $bidan = Bidan::all()->where('posyandu_id','==', Auth::user()->posyandu->id)->count();
            $bayi = Bayi::all()->where('posyandu_id','==', Auth::user()->posyandu->id)->count();
            $bumil = Bumil::all()->where('posyandu_id','==', Auth::user()->posyandu->id)->count();
            $kb = Kb::all()->where('posyandu_id','==', Auth::user()->posyandu->id)->count();
        }

        return view('home', compact([
            'antrian',
            'posyandu',
            'bidan',
            'bayi',
            'bumil',
            'kb',
        ]));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
