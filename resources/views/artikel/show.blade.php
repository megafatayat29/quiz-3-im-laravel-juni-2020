@extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail Artikel</h3>
        <br><br>
        <h3> Judul Artikel : {{ $artikel->judul }}</h3>
        <p> Isi Artikel : {{ $artikel->isi }}</p>
        <p> Tag Artikel : {{ $artikel->tag }}</p>
        <p> Slug artikel : {{ $artikel->slug }}</p>
        <p>Tanggal dibuat : {{ $artikel->tgl_dibuat }}</p>
    </div>
@endsection