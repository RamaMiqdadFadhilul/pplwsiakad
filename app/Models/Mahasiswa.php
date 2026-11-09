<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'id_mahasiswa';

    protected $guarded = ['id_mahasiswa'];

    public function prodi()
    {
        return $this->belongsTo(
            Prodi::class,
            'id_prodi',
            'id_prodi'
        );
    }

    public function mataKuliah()
    {
        return $this->belongsToMany(
            MataKuliah::class,
            'krs',
            'id_mahasiswa',
            'id_mk'
        );
    }
}