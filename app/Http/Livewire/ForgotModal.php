<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotModal extends Modal
{
    public $email;

    public $rules = [
        'email' => 'required|email|exists:users,email'
    ];

    public $messages = [
        'email.exists' => 'There is no account with this email'
    ];
    

    public function updated(string $propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.forgot-modal');
    }

    public function updatedShow($value)
    {
        $this->resetExcept(['listeners', 'show']);
        $this->resetValidation();
    }

    public function forgotPassword()
    {
        $this->validate();

        try {
            // send email to specific
            $token = Str::random(64);
    
            DB::table('password_resets')->insert([
                'email' => $this->email, 
                'token' => $token, 
                'created_at' => Carbon::now()
              ]);
    
            Mail::send('emails.forgot-password', ['token' => $token, 'email' => $this->email], function ($message) {
                $message->to($this->email);
                $message->subject('Reset Password');
            });
    
            $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Email for setting new password sent to your inbox.']);
        } catch (Exception $e) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Ooops something went wrong!']);
        }
        
    }

    public function close()
    {
        $this->resetExcept(['listeners']);
        $this->resetValidation();
        $this->show = false;
    }
}
