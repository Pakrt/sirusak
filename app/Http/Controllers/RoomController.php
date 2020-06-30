<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $kamar = Room::all();
        return view('master.room.index', compact('kamar'));
    }

    public function create(Request $request)
    {
        Room::create($request->all());
        return redirect('/kamar')->with('status', 'Data berhasil ditambahkan !!');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Room $room)
    {
        //
    }

    public function edit($id)
    {
        $kamar =Room::find($id);
        return view('master.room.edit', compact('kamar'));
    }

    public function update(Request $request, $id)
    {
        $kamar = Room::find($id);
        $kamar->update($request->all());
        return redirect('/kamar')->with('status', 'Data berhasil di update !!');
    }

    public function destroy($id)
    {
        $kamar = Room::find($id);
        $kamar->delete();
        return redirect('/kamar')->with('status', 'Data berhasil dihapus !!');
    }
}
