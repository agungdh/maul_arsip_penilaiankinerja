<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateTugasPokok extends Model
{
    protected $table = 'template_tugas_pokok';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'keterangan',
    					];

	public function detailTemplateTugasPokoks()
    {
        return $this->hasMany('App\DetailTemplateTugasPokok','id_template_tugas_pokok');
    } 
}
