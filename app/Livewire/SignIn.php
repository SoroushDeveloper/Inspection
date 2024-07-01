<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SignIn extends Component
{
    public $form = [
        'email' => '',
        'password' => '',
    ];

    public function save()
    {
        $this->validate([
            'form.email' => 'required|email|exists:users,email',
            'form.password' => 'required',
        ]);
        Auth::attempt($this->form);
        return redirect()->route('Home');
    }

    public function render()
    {
        return view('livewire.sign-in');
    }
}
