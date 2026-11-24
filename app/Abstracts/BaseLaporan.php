<?php

namespace App\Abstracts;

abstract class BaseLaporan {
    abstract public function send(string $file): string;
}