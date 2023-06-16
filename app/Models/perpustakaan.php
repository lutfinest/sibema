<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpustakaan extends Model
{
    use HasFactory;

    public function pegawai()
    {
        return $this->belongsTo(pegawai::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class);
    }
}