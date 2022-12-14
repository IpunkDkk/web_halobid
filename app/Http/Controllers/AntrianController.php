<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Posyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->role->role == 'superadmin'){
            $data = Antrian::all();
        }else{
            $data = Antrian::all()->where('posyandu_id','==', Auth::user()->posyandu->id);
        }
        return view('antrian.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posyandu = Posyandu::all();
        return view('antrian.create', compact(['posyandu']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $antrian =  DB::table('antrians')->latest('created_at')->first();
        if ($antrian) {
            $no = $antrian->no_antrian;
//            dd($no);
            if (Auth::user()->posyandu->nama == $request->status) // pasean diubah ke table posyandu user integreted
            {
                $kode = substr($no, 0, strlen($no) - 1); // get kode from nomer antrian
                $angka = $no[strlen($no) - 1] + 1; // add + 1 from previus no antrian
                $antrian = Antrian::create([
                    'no_antrian' => $kode . $angka,
                    'ket_antrian' => 'konsultasi',
                    "posyandu_id" => Auth::user()->posyandu->id

                ]);
                return redirect()->route('antrian.index');
            } else {
                $kode = substr($no, 0, strlen($no) - 1); // get kode from nomer antrian
                $angka = $no[strlen($no) - 1] + 1; // add + 1 from previus no antrian
                $posyandu = 'taretah'; // merupakan posyandu yang dituju
                $ket = "Pasien pindah domisili dari posyandu " . Auth::user()->posyandu->nama . ' ke ' . $request->status;
                $antrian = Antrian::create([
                    'no_antrian' => $kode . $angka,
                    'ket_antrian' => $ket,
                    'posyandu_id' => Auth::user()->posyandu->id,

                ]);
                return redirect()->route('antrian.index');
            }
        }else{
            $no = "P00";
//            dd($no);
            if (Auth::user()->posyandu->nama == $request->status) // pasean diubah ke table posyandu user integreted
            {
                $kode = substr($no, 0, strlen($no) - 1); // get kode from nomer antrian
                $angka = $no[strlen($no) - 1] + 1; // add + 1 from previus no antrian
                $antrian = Antrian::create([
                    'no_antrian' => $kode . $angka,
                    'ket_antrian' => 'konsultasi',
                    "posyandu_id" => Auth::user()->posyandu->id

                ]);
                return redirect()->route('antrian.index');
            } else {
                $kode = substr($no, 0, strlen($no) - 1); // get kode from nomer antrian
                $angka = $no[strlen($no) - 1] + 1; // add + 1 from previus no antrian
                $posyandu = 'taretah'; // merupakan posyandu yang dituju
                $ket = "Pasien pindah domisili dari posyandu " . Auth::user()->posyandu->nama . ' ke ' . $request->status;
                $antrian = Antrian::create([
                    'no_antrian' => $kode . $angka,
                    'ket_antrian' => $ket,
                    'posyandu_id' => Auth::user()->posyandu->id,

                ]);
                return redirect()->route('antrian.index');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Antrian::find($id);
        return view('antrian.show', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($request-)
        $data = Antrian::where('id', $id)->first();
        return view('antrian.edit', compact(['data']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Antrian::where('id', $id)->first();
        $data->update($request->all());
        return redirect()->route('antrian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antrian  $antrian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Antrian::where('id', $id)->delete();
        if ($del) {
            $data = Antrian::all();
            return redirect()->route('antrian.index', compact('data'));
        }
    }
}
