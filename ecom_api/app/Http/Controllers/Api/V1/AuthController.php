<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registration(RegisterRequest $registerRequest) {
            $user = User::create($registerRequest->validated());
            

    }
}
