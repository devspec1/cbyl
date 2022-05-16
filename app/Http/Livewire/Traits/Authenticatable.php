<?php

namespace App\Http\Livewire\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

trait Authenticatable
{
    public function login()
    {
        $payload = $this->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        $user = User::where(['email' => $payload['email']])->first();

        if (empty($user->stripe_id) || !Auth::attempt($payload)) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        return redirect('account');
    }
}
