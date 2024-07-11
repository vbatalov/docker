<?php

use App\Http\Controllers\Api\v1\Place\CreateFavoritePlace;
use App\Http\Controllers\Api\v1\Place\CreatePlace;
use App\Http\Controllers\Api\v1\Place\GetFavoritePlace;
use App\Http\Controllers\Api\v1\Place\GetPlaces;
use App\Http\Controllers\Api\v1\User\CreateUser;
use App\Http\Controllers\Api\v1\User\GetUsers;
use Illuminate\Support\Facades\Route;

Route::prefix("v1")->group(function () {
    Route::prefix("get")->group(function () {
        Route::post("places", GetPlaces::class);
        Route::post("users", GetUsers::class);
        Route::post("favorite-place", GetFavoritePlace::class);
    });

    Route::prefix("create")->group(function () {
        Route::post("place", CreatePlace::class);
        Route::post("user", CreateUser::class);
        Route::post("favorite-place", CreateFavoritePlace::class);
    });
});
