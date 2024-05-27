<?php

namespace App\Http\Controllers;

use App\Models\JadwalDokter;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateJadwalDokterRequest;

class JadwalDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwal = JadwalDokter::all();
        return view('dashboard.jadwal.indexjadwal', ['jadwal' => $jadwal]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_dokter' => 'required|string',
            'poliklinik' => 'required|string',
            'jam_mulai' => 'required|date_format:H:i',
        ]);

        JadwalDokter::create($validatedData);        

        return redirect('/dashboard/jadwal-dokter')->with('success', 'Jadwal dokter telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(JadwalDokter $jadwalDokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JadwalDokter $jadwalDokter)
    {
        return view('dashboard.jadwal.edit', [
            'data' => $jadwalDokter,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalDokter $jadwalDokter)
    {
        $validatedData = $request->validate([
            'nama_dokter' => 'required|string',
            'poliklinik' => 'required|string',
            'jam_mulai' => 'required',
        ]);

        JadwalDokter::where('id', $jadwalDokter->id)->update($validatedData);         

        return redirect('/dashboard/jadwal-dokter')->with('success', 'Jadwal dokter telah diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JadwalDokter $jadwalDokter)
    {
        JadwalDokter::destroy($jadwalDokter->id);        
        return back()->with('success', 'Jadwal dokter telah dihapus');
    }
}
