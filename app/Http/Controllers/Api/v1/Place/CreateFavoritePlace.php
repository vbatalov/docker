<?php

namespace App\Http\Controllers\Api\v1\Place;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFavoritePlaceRequest;
use App\Models\FavoritePlace;
use Illuminate\Support\Facades\Response;

class CreateFavoritePlace extends Controller
{
    public function __invoke(CreateFavoritePlaceRequest $request)
    {
        if (FavoritePlace::where([
                "user_id" => $request->get("user_id"),
            ])->count() >= 2) {
            return Response::json([
                "Error" => "You cant add more then 2 favorite places"
            ]);
        }

        FavoritePlace::create(
            [
                "user_id" => $request->get("user_id"),
                "place_id" => $request->get("id"),
            ]);

        return Response::json("OK");
    }
}
