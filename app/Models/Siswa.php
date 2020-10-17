<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
    	'sekolah_id',
    	'nis',
    	'nama_lengkap',
    	'jenis_kelamin',
    	'alamat',
    	'no_telp',
    ];

    public function sekolah()
    {
    	return $this->belongsTo(Sekolah::class);
    }

    public function ijazah()
    {
        return $this->hasOne(Ijazah::class);
    }

    public function beasiswa()
    {
        return $this->hasMany(Beasiswa::class);
    }
}
