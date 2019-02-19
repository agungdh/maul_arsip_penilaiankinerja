<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'nama',
                            'nip',
                            'id_jabatan',
                            'id_pangkat',
    						'id_unit',
    					];
}
