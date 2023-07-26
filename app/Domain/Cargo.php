<?php

namespace App\Domain\Cargo;

class Cargo
{
    private $id;
    private $description;

    public function __construct(int $id, string $description)
    {
        $this->id = $id;
        $this->description = $description;
    }

    
}
