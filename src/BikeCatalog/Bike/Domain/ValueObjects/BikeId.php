<?php

namespace Src\BikeCatalog\Bike\Domain\ValueObjects;

final class BikeId
{
    private $bikeId;

    public function __construct(int $bikeId)
    {
        $this->bikeId = $bikeId;
    }

    public function value(): int
    {
        return $this->bikeId;
    }
}