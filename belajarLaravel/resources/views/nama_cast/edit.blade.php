@extends('layouts.master')

@section('title')
Halaman Edit Cast
@endsection

@section('content')
<form method="POST" action="/nama_cast/{{$nama_cast->id}}">
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
    @method("put")
    <div class="form-group">
        <label for="nama">Cast Nama</label>
        <input type="text"  value="{{$nama_cast->nama}}"  class="form-control" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="umur">Cast Umur</label>
        <input type="number" value="{{$nama_cast->umur}}"  class="form-control" id="umur" name="umur" required>
    </div>
    <div class="form-group">
        <label for="bio">Cast Bio</label>
        <textarea class="form-control" id="bio" name="bio" rows="3" required>{{$nama_cast->bio}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
