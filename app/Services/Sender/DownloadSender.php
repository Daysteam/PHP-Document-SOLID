<?php

namespace App\Services\Sender;

use App\Abstracts\BaseLaporan;

class DownloadSender extends BaseLaporan {
    public function send(string $file) : string
    {
        return "Laporan berhasil didownload";
    }
}