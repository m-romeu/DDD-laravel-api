<?php

declare(sctrict_types=1);

namespace Src\BikeCatalog\Bike\Application;
use Src\BikeCatalog\Bike\Domain\Contracts\BikeRepositoryContract;
use Src\BikeCatalog\Bike\Domain\Bike;

final class GetBikeUseCase
{
    private $repository;

    public function __construct(BikeRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $id): ?Bike
    {
        return $this->repository->getBike($id);
    }
}