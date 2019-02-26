<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TugasPokok extends Model
{
    protected $table = 'tugas_pokok';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'id_skp',
                            'tugas_pokok',
                            'ak',
                            'kuantitas',
                            'id_output_tugas_pokok',
                            'kualitas_mutu',
                            'nilai_waktu',
                            'id_satuan_waktu',
                            'biaya',
    					];

    public function SKP()
    {
        return $this->belongsTo('App\SKP','id_skp');
    } 
}
