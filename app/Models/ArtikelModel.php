<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
    public static function get_all(){
        $artikels = DB::table('artikels')->get();
        return $artikels;
    }

    public static function save($data) {
        $new_artikel = DB::table('artikels')->insert($data);
        return $new_artikel;
    }
}