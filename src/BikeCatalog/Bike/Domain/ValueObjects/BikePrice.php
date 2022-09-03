<?php

namespace Src\BikeCatalog\Bike\Domain\ValueObjects;

final class BikePrice
{
    private $bikePrice;

    public function __construct(string $bikePrice)
    {
        $this->bikePrice = $bikePrice;
    }

    public function value(): string
    {
        return $this->bikePrice;
    }
}