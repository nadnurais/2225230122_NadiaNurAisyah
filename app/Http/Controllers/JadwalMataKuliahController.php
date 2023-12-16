<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\JadwalMataKuliah;
 
class JadwalMataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwalmatakuliah = JadwalMataKuliah::orderBy('created_at', 'DESC')->get();
 
        return view('jadwalmatakuliah.index', compact('jadwalmatakuliah'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jadwalmatakuliah.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        JadwalMataKuliah::create($request->all());
 
        return redirect()->route('jadwalmatakuliah.index')->with('success', 'JadwalMataKuliah berhasil disimpan');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jadwalmatakuliah = JadwalMataKuliah::findOrFail($id);
 
        return view('jadwalmatakuliah.show', compact('jadwalmatakuliah'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwalmatakuliah = JadwalMataKuliah::findOrFail($id);
 
        return view('jadwalmatakuliah.edit', compact('jadwalmatakuliah'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jadwalmatakuliah = JadwalMataKuliah::findOrFail($id);
 
        $jadwalmatakuliah->update($request->all());
 
        return redirect()->route('jadwalmatakuliah.index')->with('success', 'jadwalmatakuliah berhasil diupdate');
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jadwalmatakuliah = JadwalMataKuliah::findOrFail($id);
 
        $jadwalmatakuliah->delete();
 
        return redirect()->route('jadwalmatakuliah.index')->with('success', 'jadwalmatakuliah berhasil dihapus');
    }
}
