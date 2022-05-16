<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $email;

    public $message;

    protected $rules = [
        'email' => 'required|email|min:6',
        'message' => 'required'
    ];

    public function updated(string $propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function render(): View
    {
        return view('livewire.contact-form');
    }

    public function sendMessage(): void
    {
        $payload = $this->validate();
        // send email to specific
        try {

            $input = request()->all();
            $subject = 'Contact | ' . config('app.name');

            //  Send mail to admin
            // Mail::send('emails.contact', array(
            //     'email' => $this->email,
            //     'subject' => $subject,
            //     'message' => $this->message,
            // ), function($message) use ($subject) {
            //     $message->to($this->email)->subject($subject);
            // });

            $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Successfully send']);

            $this->resetExcept(['listeners']);
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error',  'message' => 'Ooops something went wrong!']);
        }
    }
}
