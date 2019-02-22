<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplatePerilakuKerja extends Model
{
    protected $table = 'template_perilaku_kerja';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'keterangan',
    					];

	public function detailTemplatePerilakuKerjas()
    {
        return $this->hasMany('App\DetailTemplatePerilakuKerja','id_template_perilaku_kerja');
    } 
}
