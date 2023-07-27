<?php

namespace App\Domain\Event;

class HandlingEvent
{
    private $id;
    private $cargoId;
    private $eventType;

    public function __construct(int $id, int $cargoId, string $eventType)
    {
        $this->id = $id;
        $this->cargoId = $cargoId;
        $this->eventType = $eventType;
    }


}
