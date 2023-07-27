<?php
namespace App\Domain\Transport;

class TransportMovement
{
    private $id;
    private $cargoId;
    private $sourceLocation;
    private $destinationLocation;

    public function __construct(int $id, int $cargoId, string $sourceLocation, string $destinationLocation)
    {
        $this->id = $id;
        $this->cargoId = $cargoId;
        $this->sourceLocation = $sourceLocation;
        $this->destinationLocation = $destinationLocation;
    }

    // getters and setters...
}
