<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SatuanWaktu extends Model
{
    protected $table = 'satuan_waktu';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'satuan_waktu',
    					];
}
