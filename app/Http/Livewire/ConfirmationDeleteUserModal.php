<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ConfirmationDeleteUserModal extends Modal
{
    public function render(): View
    {
        return view('livewire.confirmation-delete-user-modal');
    }

     public function delete()
    {
        auth()->user()->delete();

        session()->invalidate();

        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Email for setting new password sent to your inbox']);

        return redirect('/?account-deleted');
    }
}
