<?php

namespace Src\BikeCatalog\Bike\Application;
use Src\BikeCatalog\Bike\Domain\Contracts\BikeRepositoryContract;

final class GetAllBikesUseCase
{
    private $repository;

    public function __construct(BikeRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): ?array
    {
        return $this->repository->getAllBikes();
    }
}