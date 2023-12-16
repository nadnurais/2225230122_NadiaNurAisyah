<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class JadwalMataKuliah extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'nama_matakuliah',
        'nama_dosen',
        'hari',
        'mode',
        'waktu'
    ];
}
