<?php

namespace App\Services\Notify;

use App\Contracts\Interfaces\SiswaNotifyInterface;

class EmailNotify implements SiswaNotifyInterface {
    public function notify(string $pesan): string
    {
        return "Pesan dikirim melalui email: $pesan";
    }
}