<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = Doctor::all();
        return view('master.user.dokter.index', compact('dokter'));
    }

    public function create(Request $request)
    {
        $user = new \App\User;
        $user->role ='dokter';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('dokter');
        // $user->remember_token = str_random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id ]);
        $dokter = Doctor::create($request->all());
        return redirect('/dokter')->with('status', 'Data berhasil ditambahkan !!');
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
        $dokter = Doctor::find($id);
        return view('master.user.dokter.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = Doctor::find($id);
        return view('master.user.dokter.edit', compact('dokter'));
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
        $dokter = Doctor::find($id);
        $dokter->update($request->all());
        return redirect('/dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Doctor::find($id);
        $dokter->delete();
        return redirect('/dokter')->with('status', 'Data berhasil dihapus !!');
    }
}
