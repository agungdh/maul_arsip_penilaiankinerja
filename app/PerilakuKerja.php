<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerilakuKerja extends Model
{
    protected $table = 'perilaku_kerja';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'id_unsur_penilaian',
                            'perilaku_kerja',
                            'nilai',
    					];
}
