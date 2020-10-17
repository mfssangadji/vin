<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;
    protected $table = 'beasiswa';
    protected $fillable = [
    	'siswa_id',
    	'jenis_beasiswa',
    	'jumlah_nominal',
    	'tanggal_pengajuan',
    	'tanggal_pengambilan',
    	'status_penerimaan',
    ];

    public function siswa()
    {
    	return $this->belongsTo(Siswa::class);
    }
}
