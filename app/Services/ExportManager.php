<?php

namespace App\Services;

use InvalidArgumentException;

class ExportManager
{
    public function __construct(
        private array $exporters
    ) {}

    public function process(string $format, iterable $data): string
    {
        if (!isset($this->exporters[$format])) {
            throw new InvalidArgumentException(
                'Format export tidak tersedia'
            );
        }
        return $this->exporters[$format]->export($data);
    }
}