<?php

namespace App\Http\Controllers\Api\v1\Place;

use App\Http\Requests\StorePlaceRequest;
use App\Models\Place;

/**
 * Class PlaceCreator.
 */
class PlaceCreator
{
    public static function create(StorePlaceRequest $request): Place
    {
        return Place::create([
            "name" => $request->get("name"),
            "user_id" => $request->get("user_id"),
            "coordinates" => $request->get("coordinates")
        ]);
    }


    public static function countable(StorePlaceRequest $request): bool
    {
        if (Place::where(["user_id" => $request->get("user_id")])->count() > 3) {
            return false;
        }

        return true;
    }

    public static function exists(StorePlaceRequest $request): bool
    {
        if (Place::where([
            "user_id" => $request->get("user_id"),
            "name" => $request->get("name")
        ])->exists()) {
            return true;
        }

        return false;
    }
}
