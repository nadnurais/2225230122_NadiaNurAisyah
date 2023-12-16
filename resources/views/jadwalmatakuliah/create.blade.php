@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Input Mata Kuliah</h1>
    <hr />
    <form action="{{ route('jadwalmatakuliah.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama_matakuliah" class="form-control" placeholder="Nama Mata Kuliah">
            </div>
            <div class="col">
                <input type="text" name="nama_dosen" class="form-control" placeholder="Nama Dosen">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="hari" class="form-control" placeholder="Hari">
            </div>
            <div class="col">
                <textarea class="form-control" name="mode" placeholder="Mode"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="waktu" class="form-control" placeholder="Waktu">
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection