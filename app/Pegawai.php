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

    public function jabatan()
    {
        return $this->belongsTo('App\Jabatan','id_jabatan');
    }     

    public function unit()
    {
        return $this->belongsTo('App\Unit','id_unit');
    }     

    public function pangkat()
    {
        return $this->belongsTo('App\Pangkat','id_pangkat');
    }     
}
