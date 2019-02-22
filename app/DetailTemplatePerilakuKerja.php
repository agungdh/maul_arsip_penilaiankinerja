<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTemplatePerilakuKerja extends Model
{
    protected $table = 'detail_template_perilaku_kerja';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'id_template_perilaku_kerja',
                            'perilaku_kerja',
    					];

	public function templatePerilakuKerja()
    {
        return $this->belongsTo('App\TemplatePerilakuKerja','id_template_perilaku_kerja');
    }    					
}
