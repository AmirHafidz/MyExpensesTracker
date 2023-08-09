<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return redirect()->json([
            'message' => 'Data Successfully Retrieved.',
            'users' => $users,
        ]);
    }

    public function show(User $user)
    {
        return response(new UserResource($user), 200);
    }
}
