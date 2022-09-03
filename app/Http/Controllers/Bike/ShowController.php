<?php

namespace App\Http\Controllers\Bike;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\BikeCatalog\Bike\Infrastructure\GetBikeController;

class ShowController extends Controller
{
    private $controller;

    public function __construct(GetBikeController $getBikeController)
    {
        $this->controller = $getBikeController;
    }
	
	public function __invoke(Request $request, int $id)
    {
        $bike = $this->controller->__invoke($request, $id);
        return response()->json([
            "name" => $bike->name()->value(),
            "trademark" => $bike->trademark()->value(),
            "price" => $bike->price()->value()
        ]);
    }
}
