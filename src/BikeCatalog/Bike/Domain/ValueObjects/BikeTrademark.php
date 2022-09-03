<?php

namespace Src\BikeCatalog\Bike\Domain\ValueObjects;

final class BikeTrademark
{
    private $bikeTrademark;

    public function __construct(string $bikeTrademark)
    {
        $this->bikeTrademark = $bikeTrademark;
    }

    public function value(): string
    {
        return $this->bikeTrademark;
    }
}