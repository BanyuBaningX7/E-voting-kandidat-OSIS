<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    // Mendaftarkan kolom yang boleh diisi
    protected $fillable = [
        'nomor_urut',
        'nama_ketua',
        'nama_wakil',
        'visi',
        'misi',
    ];
}