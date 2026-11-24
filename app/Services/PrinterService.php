<?php

namespace App\Services;

class PrinterService {
    public function __construct(private PrinterManager $printer_manager){}

    public function print(string $format, string $file): string
    {
        return $this->printer_manager->process($format,$file);
    }
}