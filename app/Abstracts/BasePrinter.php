<?php

namespace App\Abstracts;

abstract class BasePrinter {
    abstract public function print(string $file): string;
}