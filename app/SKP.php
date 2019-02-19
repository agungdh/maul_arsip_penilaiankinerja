<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SKP extends Model
{
    protected $table = 'skp';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'tahun',
                            'id_pegawai_penilai',
                            'id_pegawai_dinilai',
    					];
}
