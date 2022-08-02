<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.register', [
            'title' => 'Register'
        ]);
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
        // dd($request->all());

        // $this->validate($request, [
        //     'nama' => 'required|max:255',
        //     'username' => ['required', 'min:3', 'max:10', 'unique:users'],
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:3|max:10'
        // ]);



        // $validateData['password'] = Hash::make($validateData['password']);
        $password = Hash::make($request->password);
        $user = User::create([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $password
        ]);

        // dd('Berhasil');
        if ($user) {
            $id = $user->id;
            $role = Role::create([
                'user_id' => $id,
                'role' => 'user'
            ]);
            // $data = DB::table('users')->join('roles', 'roles.user_id', '=', 'users.id')
            //     ->get(['users.name', 'users.email', 'roles.role', 'roles.id']);
            // return view('user.index', compact(['data']));
            return redirect()->route('login');
            // return view('user.create');
        } else {
            return redirect()->route('register');
        }

        // return redirect()->route('login')->with('Success', 'Register berhasil!, silahkan login');
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
