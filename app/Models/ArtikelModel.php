<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel {
    public static function get_all(){
        $artikels = DB::table('artikels')->get();
        return $artikels;
    }

    public static function save($data) {
        //data _token nya diilangi
        unset($data["_token"]);
        $data["slug"] = strtolower(str_replace(' ','-',$data["judul"]));
        $new_artikel = DB::table('artikels')->insert($data);
        return $new_artikel;
    }

    public static function find_by_id($artikel_id){
        $artikel = DB::table('artikels')->where('artikel_id', '=', $artikel_id)->first();
        return $artikel;
    }

    public static function update($artikel_id, $request){
        $artikel = DB::table('artikels')
        ->where('artikel_id', $artikel_id)
        ->update([
            'judul' => $request["judul"],
            'isi' => $request["isi"],
            'tag' => $request["tag"],
        ]);
        return $artikel;
    }

    public static function destroy($artikel_id){
        $deleted = DB::table('artikels')
        ->where('artikel_id', $artikel_id)
        ->delete();
        return $deleted;
    }
}