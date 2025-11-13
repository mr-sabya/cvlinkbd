<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;
    public $errorMessage;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        if (Auth::guard('admin')->attempt([
            'email' => $this->email,
            'password' => $this->password
        ], $this->remember)) {
            return redirect()->route('home');
        }

        $this->errorMessage = 'Invalid email or password.';
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
