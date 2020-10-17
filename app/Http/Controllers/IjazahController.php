<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Ijazah;
use Illuminate\Http\Request;

class IjazahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ijazah = Ijazah::all();
        return view('auths.ijazah.index', compact('ijazah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        return view('auths.ijazah.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ijazah::create([
            'siswa_id' => $request->siswa_id,
            'no_ijazah' => $request->no_ijazah,
        ]);

        return redirect()->route('ijazah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ijazah  $ijazah
     * @return \Illuminate\Http\Response
     */
    public function status(Ijazah $ijazah, Request $request)
    {
        $ijazah = Ijazah::find($request->id);
        if($ijazah->status_penerimaan == 0){
            Ijazah::where('id', $request->id)
            ->update([
                'status_penerimaan' => 1,
                'tanggal_pengambilan' => date("Y-m-d"),
            ]);
        }elseif($ijazah->status_penerimaan == 1){
            Ijazah::where('id', $request->id)
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
     * @param  \App\Models\Ijazah  $ijazah
     * @return \Illuminate\Http\Response
     */
    public function edit(Ijazah $ijazah)
    {
        $siswa = Siswa::all();
        $ijazah = Ijazah::find($ijazah->id);
        return view('auths.ijazah.edit', compact('siswa', 'ijazah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ijazah  $ijazah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ijazah $ijazah)
    {
        Ijazah::where('id', $ijazah->id)
        ->update([
            'siswa_id' => $request->siswa_id,
            'no_ijazah' => $request->no_ijazah,
        ]);

        return redirect()->route('ijazah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ijazah  $ijazah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ijazah $ijazah)
    {
        Ijazah::destroy($ijazah->id);
        return redirect()->back();
    }
}
