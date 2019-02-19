<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    protected $table = 'pangkat';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'golongan',
                            'ruang',
    						'pangkat',
    					];
}
