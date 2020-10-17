<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beasiswa = Beasiswa::all();
        return view('auths.beasiswa.index', compact('beasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        return view("auths.beasiswa.create", compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Beasiswa::create([
            'siswa_id' => $request->siswa_id,
            'jenis_beasiswa' => $request->jenis_beasiswa,
            'jumlah_nominal' => $request->jumlah_nominal,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
        ]);

        return redirect()->route('beasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function status(Beasiswa $beasiswa, Request $request)
    {
        $beasiswa = Beasiswa::find($request->id);
        if($beasiswa->status_penerimaan == 0){
            Beasiswa::where('id', $request->id)
            ->update([
                'status_penerimaan' => 1,
                'tanggal_pengambilan' => date("Y-m-d"),
            ]);
        }elseif($beasiswa->status_penerimaan == 1){
            Beasiswa::where('id', $request->id)
            ->update([
                'status_penerimaan' => 0,
                'tanggal_pengambilan' => "",
            ]);
        }

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Beasiswa $beasiswa)
    {
        $siswa = Siswa::all();
        $beasiswa = Beasiswa::find($beasiswa->id);
        return view('auths.beasiswa.edit', compact('siswa','beasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beasiswa $beasiswa)
    {
        Beasiswa::where('id', $beasiswa->id)
        ->update([
            'siswa_id' => $request->siswa_id,
            'jenis_beasiswa' => $request->jenis_beasiswa,
            'jumlah_nominal' => $request->jumlah_nominal,
            'tanggal_pengajuan' => $request->tanggal_pengajuan,
        ]);

        return redirect()->route('beasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beasiswa  $beasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beasiswa $beasiswa)
    {
        Beasiswa::destroy($beasiswa->id);
        return redirect()->back();
    }
}
