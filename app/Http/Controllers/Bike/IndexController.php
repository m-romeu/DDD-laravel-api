<?php

namespace App\Http\Controllers\Bike;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\BikeCatalog\Bike\Infrastructure\GetAllBikesController;

class IndexController extends Controller
{
    private $controller;

    public function __construct(GetAllBikesController $getAllBikesController)
    {
        $this->controller = $getAllBikesController;
    }
	
	 public function __invoke()
    {
        $bikes = $this->controller->__invoke();
        return response()->json($bikes);
    }
}
