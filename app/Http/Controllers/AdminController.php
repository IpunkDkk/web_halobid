<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->join('roles', 'roles.user_id','=', 'users.id')
        ->get(['users.name', 'users.email', 'roles.role', 'roles.id']);
        return view('user.index', compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'unique:users',
        ]);
        $password = Hash::make($request->password);
        $simpan = User::create([
            'name' => $request->name,
            'username'=> $request->username,
            'email' => $request->email,
            'password' => $password
        ]);

        if ($simpan) {
            $id = $simpan->id;
            $role = Role::create([
                'user_id'=>$id,
                'role' => $request->role
            ]);
            $data = DB::table('users')->join('roles', 'roles.user_id','=', 'users.id')
            ->get(['users.name', 'users.email', 'roles.role', 'roles.id']);
            return view('user.index', compact(['data']));
            return redirect()->route('user.index', compact('data'));
        }
        else {
            return view('user.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
