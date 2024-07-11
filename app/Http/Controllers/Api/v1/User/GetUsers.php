<?php

namespace App\Http\Controllers\Api\v1\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class GetUsers extends Controller
{
    public function __invoke()
    {
        return UserResource::collection(User::paginate(10));
    }
}
