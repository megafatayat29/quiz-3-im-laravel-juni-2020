<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ArtikelModel;

class ItemController extends Controller
{
    public function create(){
        return view('artikel.form');
    }

    public function store(Request $request){
        // dd($request->all());
        $new_artikel = ArtikelModel::save($request->all());
        return redirect('/artikel');
    }

    public function index(){
        $artikel = ArtikelModel::get_all();
        // dd($artikel->all());
        return view('artikel.index', compact('artikel'));
    }

    public function show($artikel_id){
        $artikel = ArtikelModel::find_by_id($artikel_id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($artikel_id){
        $artikel = ArtikelModel::find_by_id($artikel_id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update($artikel_id, Request $request){
        $artikel = ArtikelModel::update($artikel_id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($artikel_id){
        $deleted = ArtikelModel::destroy($artikel_id);

        return redirect('/artikel');
    }
}
