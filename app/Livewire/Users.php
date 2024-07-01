<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class Users extends Component
{
    public $users = [];

    public $types = [];

    public $form = [
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'password' => '',
        'personal_code' => '',
        'user_type' => '',
    ];

    public function mount()
    {
        $this->users = User::all();
        $this->types = User::Types;
    }

    public function save()
    {
        $this->validate([
            'form.first_name' => 'required|max:255',
            'form.last_name' => 'required|max:255',
            'form.password' => 'required|min:4',
            'form.email' => 'required|email|unique:users,email',
            'form.personal_code' => 'required|unique:users,personal_code',
            'form.user_type' => ['required', Rule::in(array_keys(User::Types))],
        ]);
        User::query()->create($this->form);
        return $this->redirect('/Users');
    }

    public function delete($id)
    {
        $user = User::query()->find($id);
        $user->delete();
        return $this->redirect('/Users');
    }

    #[Title('کاربران')]
    public function render()
    {
        return view('livewire.users');
    }
}
