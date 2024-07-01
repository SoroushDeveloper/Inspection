<?php

namespace App\Livewire;

use App\Models\State;
use Livewire\Attributes\Title;
use Livewire\Component;

class States extends Component
{
    public $states = [];

    public $form = [
        'name' => '',
        'code' => '',
    ];

    public function mount()
    {
        $this->states = State::all();
    }

    public function save()
    {
        $this->validate([
            'form.name' => 'required',
            'form.code' => 'required',
        ]);
        $this->form['user_id'] = auth()->id();
        State::query()->create($this->form);
        return $this->redirect('/States');
    }

    public function delete($id)
    {
        $state = State::query()->find($id);
        $state->delete();
        return $this->redirect('/States');
    }

    #[Title('مناطق')]
    public function render()
    {
        return view('livewire.states');
    }
}
