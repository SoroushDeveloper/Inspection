<?php

namespace App\Livewire;

use App\Models\Type;
use Livewire\Attributes\Title;
use Livewire\Component;

class Types extends Component
{

    public $types = [];

    public $form = [
        'title' => '',
    ];

    public function mount()
    {
        $this->types = Type::all();
    }

    public function save()
    {
        $this->validate([
            'form.title' => 'required',
        ]);
        $this->form['user_id'] = auth()->id();
        Type::query()->create($this->form);
        return $this->redirect('/Types');
    }

    public function delete($id)
    {
        $type = Type::query()->find($id);
        $type->delete();
        return $this->redirect('/Types');
    }

    #[Title('انواع واحد های آموزشی')]
    public function render()
    {
        return view('livewire.types');
    }
}
