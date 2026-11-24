<?php

namespace App\Services;

use App\Contracts\Interfaces\SiswaNotifyInterface;
use App\Contracts\Interfaces\SiswaRepositoryInterface;

class SiswaService {

    public function __construct(private SiswaRepositoryInterface $siswa_repostitory,
        private SiswaNotifyInterface $siswa_notify_interface){}

    public function getAll(){
        return $this->siswa_repostitory->getAll();
    }

    public function store(array $data){

        $siswa = $this->siswa_repostitory->store($data);

        $pesan = "Siswa atas nama {$siswa->nama} akunnya sudah bisa digunakan";
        $this->siswa_notify_interface->notify($pesan);

        return $siswa;
    }
}