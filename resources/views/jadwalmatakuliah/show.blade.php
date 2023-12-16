@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detail Jadwal Mata Kuliah</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="nama_matakuliah" class="form-control" placeholder="Nama Mata Kuliah" value="{{ $jadwalmatakuliah->nama_matakuliah }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Dosen</label>
            <input type="text" name="nama_dosen" class="form-control" placeholder="Nama Dosen" value="{{ $jadwalmatakuliah->nama_dosen }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Hari</label>
            <input type="text" name="hari" class="form-control" placeholder="Hari" value="{{ $jadwalmatakuliah->hari }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Mode</label>
            <textarea class="form-control" name="mode" placeholder="Mode" readonly>{{ $jadwalmatakuliah->mode }}</textarea>
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
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $jadwalmatakuliah->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $jadwalmatakuliah->updated_at }}" readonly>
        </div>
    </div>
@endsection