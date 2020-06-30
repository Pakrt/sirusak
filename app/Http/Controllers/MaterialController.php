<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $material = Material::all();
        return view('master.material.index', compact('material'));
    }

    public function create(Request $request)
    {
        Material::create($request->all());
        return redirect('/material')->with('status', 'Data berhasil ditambahkan !!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Material $material)
    {
        //
    }

    public function edit($id)
    {
        $material = Material::find($id);
        return view('master.material.edit', compact('material'));
    }

    public function update(Request $request, $id)
    {
        $material = Material::find($id);
        $material->update($request->all());
        return redirect('/material')->with('status', 'Data berhasil di update !!');
    }

    public function destroy($id)
    {
        $material = Material::find($id);
        $material->delete();
        return redirect('/material')->with('status', 'Data berhasil dihapus !!');
    }
}
