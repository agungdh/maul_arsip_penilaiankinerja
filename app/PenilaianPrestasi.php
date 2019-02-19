<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenilaianPrestasi extends Model
{
    protected $table = 'penilaian_prestasi';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'tahun',
                            'id_pegawai_dinilai',
                            'id_pegawai_penilai',
                            'id_pegawai_atasan_penilai',
    					];
}
