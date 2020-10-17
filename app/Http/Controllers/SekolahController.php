<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('auths.sekolah.index', compact('sekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auths.sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sekolah::create([
            'tingkatan_pendidikan' => $request->tingkatan_pendidikan,
            'nama_sekolah' => $request->nama_sekolah,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('sekolah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Sekolah $sekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekolah $sekolah)
    {
        $sekolah = Sekolah::find($sekolah->id);
        return view('auths.sekolah.edit', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        Sekolah::where('id', $sekolah->id)
        ->update([
            'tingkatan_pendidikan' => $request->tingkatan_pendidikan,
            'nama_sekolah' => $request->nama_sekolah,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('sekolah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekolah $sekolah)
    {
        Sekolah::destroy($sekolah->id);
        return redirect()->route('sekolah');
    }
}
