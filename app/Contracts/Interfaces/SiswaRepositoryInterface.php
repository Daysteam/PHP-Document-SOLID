<?php

namespace App\Contracts\Interfaces;

use App\Models\Siswa;

interface SiswaRepositoryInterface {
    public function getAll();

    public function store(array $data);
}