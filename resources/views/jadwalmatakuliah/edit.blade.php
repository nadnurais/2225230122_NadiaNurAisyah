@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Edit Jadwal Mata Kuliah</h1>
    <hr />
    <form action="{{ route('jadwalmatakuliah.update', $jadwalmatakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama Mata Kuliah</label>
                <input type="text" name="nama_matakuliah" class="form-control" placeholder="Nama Mata Kuliah" value="{{ $jadwalmatakuliah->nama_matakuliah }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Dosen</label>
                <input type="text" name="nama_dosen" class="form-control" placeholder="Nama Dosen" value="{{ $jadwalmatakuliah->nama_dosen }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Hari</label>
                <input type="text" name="hari" class="form-control" placeholder="Hari" value="{{ $jadwalmatakuliah->jadwalmatakuliah_hari }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Mode</label>
                <textarea class="form-control" name="mode" placeholder="Mode" >{{ $jadwalmatakuliah->mode }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Waktu</label>
                <input type="text" name="waktu" class="form-control" placeholder="Waktu" value="{{ $jadwalmatakuliah->waktu }}" >
            </div>
            <div class="col mb-3">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection