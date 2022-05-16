<?php

namespace App\Http\Livewire;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ResetPassword extends Modal
{
    public $password;

    public $email;

    public $token;

    public $confirmPassword;

    public function mount()
    {
        $this->email = request()->query('email');
        $this->token = request()->token;
    }

    public function render()
    {
        return view('livewire.reset-password');
    }

    public function resetPassword()
    {
        $payload = $this->validate([
            'email' => 'required',
            'password' => 'required|min:5',
            'confirmPassword' => 'required|same:password',
        ]);

        try {
            $updatePassword = DB::table('password_resets')
                        ->where([
                            'email' => $this->email, 
                            'token' => $this->token
                        ])
                        ->first();

            if(!$updatePassword){
                $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Token is invalid!']);
                return;
            }

            $user = User::where('email', $this->email)->first();

            if (!$user) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'There is no account with this email']);
                return;
            }
            
            $user->update(['password' => Hash::make($this->password)]);

            DB::table('password_resets')->where(['email'=> $this->email])->delete();

            $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Success! you will be redirected back to login.']);

            return redirect('/');

        } catch (Exception $e) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Ooops! Something went wrong!']);
        }
    }
}
