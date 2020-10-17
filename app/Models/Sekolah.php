<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;
    protected $table = 'sekolah';
    protected $fillable = [
    	'tingkatan_pendidikan',
    	'nama_sekolah',
    	'alamat',
    	'no_telp',
    ];

    public function siswa()
    {
    	return $this->hasMany(Siswa::class);
    }
}
