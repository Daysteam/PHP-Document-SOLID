<?php

namespace App\Services\Sender;

use App\Abstracts\BaseLaporan;

class WhatsAppSender extends BaseLaporan {
    public function send(string $file) : string
    {
        return "Laporan dikirim menggunakan whatsapp";
    }
}