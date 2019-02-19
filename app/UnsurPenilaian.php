<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnsurPenilaian extends Model
{
    protected $table = 'unsur_penilaian';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'id_penilaian_prestasi',
                            'sasaran_kerja',
    					];
}
