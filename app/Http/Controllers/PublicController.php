<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function ijazah()
    {
    	$ijazah = \App\Models\Ijazah::all();
    	return view('ijazah', compact('ijazah'));
    }

    public function beasiswa()
    {
    	$beasiswa = \App\Models\Beasiswa::all();
    	return view('beasiswa', compact('beasiswa'));
    }

    public function tentang()
    {
    	return view('tentang');
    }

    public function kontak()
    {
    	return view('kontak');
    }
}
