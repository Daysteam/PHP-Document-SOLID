<?php

namespace App\Services;

use InvalidArgumentException;

class PrinterManager {
    public function __construct(private array $printerer){}

    public function process(string $format, string $file): string
    {
        if (!isset($this->printerer[$format])) {
            throw new InvalidArgumentException(
                'Metode print tidak tersedia'
            );
        }
        return $this->printerer[$format]->print($file);
    }
}