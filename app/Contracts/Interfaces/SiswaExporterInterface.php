<?php

namespace App\Contracts\Interfaces;

interface SiswaExporterInterface {
    public function export(iterable $data);
}