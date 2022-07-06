<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    
    public function index()
    {
        $user = User::all();

        return view('admin.master.user.user', compact('user'));
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'level'         => $request->level,
            'created_at'    => $request->created_at,
            'updated_at'    => $request->updated_at,
        ]);

        return redirect('/user')->with('success', 'Data Berhasil Disimpan');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
        $user->level        = $request->level;
        $user->created_at   = $request->created_at;
        $user->updated_at   = $request->updated_at;

        $user->save();

        return redirect('/user')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect('/user')->with('success', 'Data Berhasil Diubah');
    }
}
