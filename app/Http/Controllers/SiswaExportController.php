<?php

namespace App\Http\Controllers;

use App\Services\SiswaExportService;
use Illuminate\Http\Request;

class SiswaExportController extends Controller
{
    public function __construct(private SiswaExportService $siswa_export_service){}

    public function export(Request $request){
        $validated = $request->validate([
            'format' => 'required|string'
        ]);

        return $this->siswa_export_service->export($validated['format']);
    }
}
