<?php

namespace App\Services;

class SiswaExportService {

    public function __construct(private ExportManager $exporters, private SiswaService $siswa_service){}

    public function export(string $format){
        $data = $this->siswa_service->getAll();

        return $this->exporters->process($format, $data);
    }
}