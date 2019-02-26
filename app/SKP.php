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

	public function pegawaiPenilai()
    {
        return $this->belongsTo('App\Pegawai','id_pegawai_penilai');
    }

    public function pegawaiDinilai()
    {
        return $this->belongsTo('App\Pegawai','id_pegawai_dinilai');
    }

    public function tugasPokoks()
    {
        return $this->hasMany('App\TugasPokok','id_skp');
    } 
}
