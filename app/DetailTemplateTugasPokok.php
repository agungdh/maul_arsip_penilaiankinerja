<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTemplateTugasPokok extends Model
{
    protected $table = 'detail_template_tugas_pokok';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'id_template_tugas_pokok',
                            'tugas_pokok',
    					];

	public function templateTugasPokok()
    {
        return $this->belongsTo('App\TemplateTugasPokok','id_template_tugas_pokok');
    }    					
}
