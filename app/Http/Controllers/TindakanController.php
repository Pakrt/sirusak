<?php

namespace App\Http\Controllers;

use App\Tindakan;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    public function index()
    {
        $tindakan = Tindakan::all();
        return view('master.tindakan.index', compact('tindakan'));
    }

    public function create(Request $request)
    {
        Tindakan::create($request->all());
        return redirect('/tindakan')->with('status', 'Data berhasil ditambahkan !!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(tindakan $tindakan)
    {
        //
    }

    public function edit($id)
    {
        $tindakan = Tindakan::find($id);
        return view('master.tindakan.edit', compact('tindakan'));
    }

    public function update(Request $request, $id)
    {
        $tindakan = Tindakan::find($id);
        $tindakan->update($request->all());
        return redirect('/tindakan')->with('status', 'Data berhasil di update !!');
    }

    public function destroy($id)
    {
        $tindakan = Tindakan::find($id);
        $tindakan->delete();
        return redirect('/tindakan')->with('status', 'Data berhasil dihapus !!');
    }
}
