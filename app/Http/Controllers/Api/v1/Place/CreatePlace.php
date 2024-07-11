<?php

namespace App\Http\Controllers\Api\v1\Place;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlaceRequest;
use App\Http\Resources\Place as PlaceResource;
use Illuminate\Support\Facades\Response;

class CreatePlace extends Controller
{
    public function __invoke(StorePlaceRequest $request)
    {

        if (!PlaceCreator::countable($request)) {
            return Response::json(
                ["Error" => "U have 3 of 3 places now"], 422
            );
        }

        if (PlaceCreator::exists($request)) {
            return Response::json([
                "Error" => "Place already exists"
            ]);
        }

        $place = PlaceCreator::create($request);

        return PlaceResource::make($place)
            ->additional(
                ["status" => "success"]
            );
    }
}
