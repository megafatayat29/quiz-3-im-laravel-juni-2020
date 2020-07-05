<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function show(){
        //
    }

    public function edit(){
        //
    }

    public function update(){
        //
    }

    public function destroy(){
        //
    }
}
