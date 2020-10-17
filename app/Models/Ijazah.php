<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ijazah extends Model
{
    use HasFactory;
    protected $table = 'ijazah';
    protected $fillable = [
    	'siswa_id',
    	'no_ijazah',
    	'tanggal_pengambilan',
    	'status_penerimaan',
    ];

    public function siswa()
    {
    	return $this->belongsTo(Siswa::class);
    }
}
