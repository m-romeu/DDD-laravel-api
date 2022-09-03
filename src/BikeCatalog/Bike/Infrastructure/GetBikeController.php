<?php

namespace Src\BikeCatalog\Bike\Infrastructure;
use Src\BikeCatalog\Bike\Application\GetBikeUseCase;
use Illuminate\Http\Request;

final class GetBikeController
{
    private $getBike;

    public function __construct(GetBikeUseCase $getBike)
    {
        $this->getBike = $getBike;
    }

    public function __invoke(Request $request, int $id)
    {
        return $this->getBike->__invoke($id);
    }
}