<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal_mata_kuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_matakuliah');
            $table->string('nama_dosen');
            $table->string('hari');
            $table->string('mode');
            $table->time('waktu');
            $table->timestamps();
        });
    }
     
    public function down(): void
    {
        Schema::dropIfExists('jadwalmatakuliah');
    }
};
