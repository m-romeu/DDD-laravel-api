<?php

namespace Src\BikeCatalog\Bike\Domain\ValueObjects;

final class BikeName
{
    private $bikeName;

    public function __construct(string $bikeName)
    {
        $this->bikeName = $bikeName;
    }

    public function value(): string
    {
        return $this->bikeName;
    }
}