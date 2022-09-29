<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create', [

        ]);
    }

    public function store()
    {
        $user = User::create(request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:255'],
        ]));
        auth()->login($user);
        return redirect('/')->with('flashMessage', 'Your Account Has Been Created!');
    }
}
