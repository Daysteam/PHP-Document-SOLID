<?php

namespace App\Services;

class SenderService {
    public function __construct(private SenderManager $sender_manager){}

    public function send(string $sender, string $file) : string
    {
        return $this->sender_manager->process($sender,$file);
    }
}