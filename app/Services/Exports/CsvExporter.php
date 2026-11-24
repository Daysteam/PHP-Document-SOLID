<?php

namespace App\Exports;

use App\Contracts\Interfaces\SiswaExporterInterface;

class CsvExporter implements SiswaExporterInterface{
    public function export(iterable $data){
        // proses

        return "Berhasil membuat file Csv";
    }
}