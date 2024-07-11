<?php

namespace App\Http\Controllers\Api\v1\Place;

use App\Http\Controllers\Controller;
use App\Http\Resources\Place as PlaceResource;
use App\Models\Place;
use Illuminate\Support\Facades\Request;

class GetPlaces extends Controller
{
    public function __invoke(Request $request)
    {
        return PlaceResource::collection(Place::paginate(10));
    }
}
