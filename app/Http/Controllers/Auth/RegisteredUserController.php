<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $messages = [
            'name.required' => 'Your name is required.',
            'email.required' => 'We need your email address.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already registered.',
            'password.required' => 'A password is required.',
            'password.confirmed' => 'Passwords do not match.',
        ];

        // Validate the incoming request data.
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], $messages);

        // Encrypt the password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Create the user
        $user = User::create($validatedData);


        // Fire off the registered event
        event(new Registered($user));

        // Automatically log in the newly registered user
        Auth::login($user);

        // Return a JSON response indicating success
       /* session()-> flash('success', 'Your account has been created.');*/

        return response()->json(['message' => 'User successfully registered', 'user' => $user], 201);
    }
}
