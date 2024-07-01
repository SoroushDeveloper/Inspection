<?php

namespace App\Livewire;

use App\Models\Consistency;
use Livewire\Attributes\Title;
use Livewire\Component;

class Consistencies extends Component
{
    public $consistencies = [];

    public $form = [
        'title' => '',
    ];

    public function mount()
    {
        $this->consistencies = Consistency::all();
    }

    public function save()
    {
        $this->validate([
            'form.title' => 'required',
        ]);
        $this->form['user_id'] = auth()->id();
        Consistency::query()->create($this->form);
        return $this->redirect('/Consistencies');
    }

    public function delete($id)
    {
        $consistency = Consistency::query()->find($id);
        $consistency->delete();
        return $this->redirect('/Consistencies');
    }

    #[Title('سطوح پیگیری')]
    public function render()
    {
        return view('livewire.consistencies');
    }
}
