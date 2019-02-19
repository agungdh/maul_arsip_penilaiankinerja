<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutputTugasPokok extends Model
{
    protected $table = 'output_tugas_pokok';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
                            'output',
    						'alias',
    					];
}
