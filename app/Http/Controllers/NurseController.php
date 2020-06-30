<?php

namespace App\Http\Controllers;

use App\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    public function index()
    {
        $perawat = Nurse::all();
        return view('master.user.perawat.index', compact('perawat'));
    }

    public function create(Request $request)
    {
        $user = new \App\User;
        $user->role ='perawat';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('perawat');
        // $user->remember_token = str_random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id ]);
        $perawat = Nurse::create($request->all());
        return redirect('/perawat')->with('status', 'Data berhasil ditambahkan !!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $perawat = Nurse::find($id);
        return view('master.user.perawat.show', compact('perawat'));
    }

    public function edit($id)
    {
        $perawat = Nurse::find($id);
        return view('master.user.perawat.edit', compact('perawat'));
    }

    public function update(Request $request, $id)
    {
        $perawat = Nurse::find($id);
        $perawat->update($request->all());
        return redirect('/perawat');
    }

    public function destroy($id)
    {
        $perawat = Nurse::find($id);
        $perawat->delete();
        return redirect('/perawat')->with('status', 'Data berhasil dihapus !!');
    }
}
