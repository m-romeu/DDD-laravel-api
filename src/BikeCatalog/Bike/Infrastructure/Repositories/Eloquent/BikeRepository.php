<?php

namespace Src\BikeCatalog\Bike\Infrastructure\Repositories\Eloquent;

use Src\BikeCatalog\Bike\Domain\Contracts\BikeRepositoryContract;
use Src\BikeCatalog\Bike\Domain\ValueObjects\{
    BikeName,
    BikeTrademark,
    BikePrice,
    BikeId
};
use Src\BikeCatalog\Bike\Domain\Bike;
use App\Models\Bike as BikeModel;

final class BikeRepository implements BikeRepositoryContract
{

    private $model;

    public function __construct()
    {
        $this->model = new BikeModel;
    }

    public function getAllBikes(): ?array
    {
        $responseArrayFormat = [];
        $bikes = $this->model->get();
        foreach ($bikes as $bike) {
            array_push($responseArrayFormat, [
                "name" => (new BikeName($bike->name))->value(),
                "trademark" => (new BikeTrademark($bike->trademark))->value(),
                "price" => (new BikePrice($bike->price))->value(),
                "type_repository" => "WITH ELOQUENT"
            ]);
        }
        return $responseArrayFormat;
    }

    public function getBike(int $id): ?Bike
    { 
        $bikeId = new BikeId($id);
        $bike = $this->model->find($bikeId->value());
        return new Bike(
            new BikeName($bike->name),
            new BikeTrademark($bike->trademark),
            new BikePrice($bike->price),
            'WITH ELOQUENT'
        );
    }
}