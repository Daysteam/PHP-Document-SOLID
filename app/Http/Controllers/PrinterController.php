<?php

namespace App\Http\Controllers;

use App\Services\PrinterService;
use Illuminate\Http\Request;

class PrinterController extends Controller{
    public function __construct(private PrinterService $printer_service){}

    public function print(Request $request)
    {
        $validated = $request->validate([
            'sender' => 'required|string',
            'file' => 'required|string'
        ]);

        $pesan = $this->printer_service->print($validated['format'], $validated['file']);

        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => $pesan
        ],200);
    }
}