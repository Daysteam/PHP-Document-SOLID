<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\SiswaRepositoryInterface;
use App\Models\Siswa;

class SiswaRepository implements SiswaRepositoryInterface{

    public function getAll(){
        $siswa = Siswa::all();
        return $siswa;
    }

    public function store(array $data){
        $siswa = Siswa::create($data);

        return $siswa;
    }
}