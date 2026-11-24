<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Services\LaporanService;
use App\Services\SiswaService;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct(private SiswaService $siswa_service){}

    public function getAll(Siswa $siswa){
        $siswa = $this->siswa_service->getAll();

        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'Berhasil mengambil data siswa',
            'data' => $siswa
        ],200);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama' => 'required|string',
            'kelas' => 'required|string',
            'jurusan' => 'required|string'
        ]);

        $siswa = $this->siswa_service->store($validated);

        return response()->json([
            'success' => true,
            'code' => 201,
            'message' => 'Berhasil mengambil data siswa',
            'data' => $siswa
        ],201);
    }
}
