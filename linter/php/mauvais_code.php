<?php

namespace php;

class MauvaisCode
{
    public string $message;

    public function __construct(string $message)
    {
        if ($message) {
            $this->message = $message;
        } else {
            $this->message = 'Mauvais code';
        }
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
    public function mauvaisCode(string $inUpperCase): void
    {
        if ($inUpperCase) {
            echo ucfirst('mauvais code');
        } else {
            echo 'mauvais code';
        }
    }
}
