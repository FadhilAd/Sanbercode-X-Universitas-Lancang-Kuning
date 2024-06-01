@extends('layouts.master')

@section('title')
Halaman Tambah Cast
@endsection

@section('content')
<form method="POST" action="/nama_cast">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
    <div class="form-group">
        <label for="nama">Cast Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="umur">Cast Umur</label>
        <input type="number" class="form-control" id="umur" name="umur" required>
    </div>
    <div class="form-group">
        <label for="bio">Cast Bio</label>
        <textarea class="form-control" id="bio" name="bio" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
