<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use App\Models\User;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->pralogin){
//            dd($request->all());
            return view('login.login', [
                'title' => 'Login'
            ]);
        }else{
            $posyandu = Posyandu::all();
            $title = 'login';
            return view('userlogin.userlogin', compact(['posyandu','title']));
        }

    }

    public function login(Request $request){
        $email = User::where('email', $request->email)->first();
        // dd($email);
        if ($email){
            if ($request->pralogin == $email->posyandu->nama){
                if (Hash::check($request->password, $email->password)){
                    if(Auth::attempt(['email' => $request->email, 'password' => $request->password], remember:1)){
                        $request->session()->regenerate();
                        return redirect()->route('admin');
                    }
                }
            }
        }
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request>session()->invalidate();
        $request>session()->regenerateToken();
        return redirect()->route('login');
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
