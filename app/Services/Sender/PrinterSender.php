<?php 

namespace App\Services\Sender;

use App\Abstracts\BasePrinter;

class PrinterSender extends BasePrinter {
    public function print(string $file) : string
    {
        return "Berhasil mencetak data";
    }
}