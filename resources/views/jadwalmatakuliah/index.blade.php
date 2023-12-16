@extends('layouts.app')
 
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Jadwal Mata Kuliah</h1>
        <a href="{{ route('jadwalmatakuliah.create') }}" class="btn btn-primary">Tambahkan Jadwal Mata Kuliah</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama Mata Kuliah</th>
                <th>Nama Dosen</th>
                <th>Hari</th>
                <th>Mode</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @if($jadwalmatakuliah->count() > 0)
                @foreach($jadwalmatakuliah as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama_matakuliah }}</td>
                        <td class="align-middle">{{ $rs->nama_dosen }}</td>
                        <td class="align-middle">{{ $rs->hari }}</td>
                        <td class="align-middle">{{ $rs->mode }}</td>
                        <td class="align-middle">{{ $rs->waktu }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('jadwalmatakuliah.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('jadwalmatakuliah.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('jadwalmatakuliah.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection