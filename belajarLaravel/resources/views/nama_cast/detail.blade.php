@extends('layouts.master')

@section('title')
Halaman Detail Cast
@endsection

@section('content')

<h1>{{$nama_cast->nama}}</h1>
<p>{{$nama_cast->umur}}</p>
<p>{{$nama_cast->bio}}</p>

<a href="/nama_cast" class="btn btn-secondary btn-sm"><Kembali></a>

@endsection