<?php

namespace App\Helper;

use Illuminate\Support\Facades\DB;

class Nilai{
	public static function keterangan($nilai) {
        if ($nilai >= 85) {
            $keterangan = "Sangat Baik";
        } elseif ($nilai >= 75) {
            $keterangan = "Baik";
        } elseif ($nilai >= 65) {
            $keterangan = "Cukup";
        } elseif ($nilai >= 55) {
            $keterangan = "Buruk";
        } else {
            $keterangan = " Sangat Buruk";
        }

        return $keterangan;
    }
}