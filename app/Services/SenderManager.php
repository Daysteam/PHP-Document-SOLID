<?php

namespace App\Services;

use InvalidArgumentException;

class SenderManager {
    public function __construct(private array $senderer){}

    public function process(string $sender,string $file){
        if (!isset($this->senderer[$sender])) {
            throw new InvalidArgumentException(
                'Metode pengiriman tidak tersedia'
            );
        }
        return $this->senderer[$sender]->send($file);
    }
}