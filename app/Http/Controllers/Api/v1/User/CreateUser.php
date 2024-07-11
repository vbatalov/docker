<?php

namespace App\Http\Controllers\Api\v1\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Controller
{
    public function __invoke(StoreUserRequest $request)
    {
        $user = User::create([
            "name" => $request->get("name"),
            "email" => $request->get("email"),
            "password" => Hash::make($request->get("password"))
        ]);

        return UserResource::make($user)->additional(
            [
                "status" => "success"
            ]
        );
    }
}
