<?php

namespace Src\BikeCatalog\Bike\Domain;

use Src\BikeCatalog\Bike\Domain\ValueObjects\{
    BikeName,
    BikeTrademark,
    BikePrice
};

final class Bike
{
    private $name;
    private $trademark;
    private $price;   

    public function __construct(
        ?BikeName $name,
        ?BikeTrademark $trademark,
        ?BikePrice $price
    )
    {
        $this->name = $name;
        $this->trademark = $trademark;
        $this->price = $price;       
    }

    public function name(): BikeName
    {
        return $this->name;
    }

    public function trademark(): BikeTrademark
    {
        return $this->trademark;
    }

    public function price(): BikePrice
    {
        return $this->price;
    }    

    public static function create(
        BikeName $name,
        BikeTrademark $trademark,
        BikePrice $price
    ): Bike
    {
        $bike = new self($name, $trademark, $price);
        return $bike;
    }
}