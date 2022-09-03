<?php

namespace Src\BikeCatalog\Bike\Domain\Contracts;
use Src\BikeCatalog\Bike\Domain\Bike;

interface BikeRepositoryContract
{

    public function getAllBikes(): ?array;

    public function getBike(int $id): ?Bike;
}