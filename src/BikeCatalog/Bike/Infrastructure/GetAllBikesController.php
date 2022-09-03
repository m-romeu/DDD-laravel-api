<?php

namespace Src\BikeCatalog\Bike\Infrastructure;
use Src\BikeCatalog\Bike\Application\GetAllBikesUseCase;
use Illuminate\Http\Request;

final class GetAllBikesController
{
    private $getAllBikes;

    public function __construct(GetAllBikesUseCase $getAllBikes)
    {
        $this->getAllBikes = $getAllBikes;
    }

    public function __invoke(): ?array
    {
        return $this->getAllBikes->__invoke();
    }
}