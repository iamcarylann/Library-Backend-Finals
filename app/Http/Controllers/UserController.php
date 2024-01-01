<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve all users
        $users = User::all();

        return response()->json($users);
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        // Create a new user
        $user = User::create($validatedData);

        return response()->json($user, 201);
    }

    public function destroy(User $user)
    {
        // Delete the specified user
        $user->delete();

        return response()->json(null, 204);
    }
}
