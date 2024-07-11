<?php

namespace App\Http\Controllers\Api\v1\Place;

use App\Http\Controllers\Controller;
use App\Http\Requests\GetFavoritePlaceRequest;
use App\Http\Resources\FavoritePlaceResource;
use App\Models\User;

class GetFavoritePlace extends Controller
{
    public function __invoke(GetFavoritePlaceRequest $request)
    {
        return FavoritePlaceResource::collection(User::findOrFail($request->get("user_id"))->favorite_places)
            ->additional([
               "result" => "success"
            ]);
    }
}
