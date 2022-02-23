<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    public function index() {
        return new UserCollection(User::all());
    }

    public function show($id) {
        return new UserResource(User::findOrFail($id));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
