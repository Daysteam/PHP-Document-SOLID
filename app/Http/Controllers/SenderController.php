<?php

namespace App\Http\Controllers;

use App\Services\SenderService;
use Illuminate\Http\Request;

class SenderController extends Controller
{
    public function __construct(private SenderService $sender_service){}

    public function send(Request $request){
        $validated = $request->validate([
            'sender' => 'required|string',
            'file' => 'required|string'
        ]);

        $pesan = $this->sender_service->send($validated['sender'],$validated['file']);

        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => $pesan
        ],200);
    }
}
