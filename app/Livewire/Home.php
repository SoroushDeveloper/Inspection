<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    public $users = 0;

    public function mount() {
        $this->users = User::count();
    }

    #[Title('میز کار')]
    public function render()
    {
        return view('livewire.home');
    }
}
