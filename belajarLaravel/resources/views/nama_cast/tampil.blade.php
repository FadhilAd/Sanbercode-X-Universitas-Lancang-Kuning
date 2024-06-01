@extends('layouts.master')

@section('title')
Halaman Tampil Cast
@endsection

@section('content')

<a href="/nama_cast/create" class="btn btn-sm btn-primary mb-3">Tambah</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($nama_cast as $key => $item)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $item->nama }}</td>
                <td>
                    <form action="/nama_cast/{{ $item->id }}" method="POST">
                        <a href="/nama_cast/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/nama_cast/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                        @csrf
                        @method('Delete')
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Data tidak ditemukan</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection
