<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $pasien = Patient::all();
        return view('patient.index', compact('pasien'));
    }

    public function create(Request $request)
    {
        Patient::create($request->all());
        return redirect('/pasien')->with('status', 'Data berhasil ditambahkan !!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $pasien = Patient::find($id);
        return view('patient.show', compact('pasien'));
    }

    public function edit($id)
    {
        $pasien = Patient::find($id);
        return view('patient.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $pasien = Patient::find($id);
        $pasien->update($request->all());
        return redirect('/pasien')->with('status', 'Data berhasil di update !');
    }

    public function destroy($id)
    {
        $pasien = Patient::find($id);
        $pasien->delete();
        return redirect('/pasien')->with('status', 'Data berhasil dihapus');
    }
}
