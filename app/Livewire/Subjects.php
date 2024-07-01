<?php

namespace App\Livewire;

use App\Models\Subject;
use Livewire\Attributes\Title;
use Livewire\Component;

class Subjects extends Component
{
    public $subjects = [];

    public $form = [
        'title' => '',
    ];

    public function mount()
    {
        $this->subjects = Subject::all();
    }

    public function save()
    {
        $this->validate([
            'form.title' => 'required',
        ]);
        $this->form['user_id'] = auth()->id();
        Subject::query()->create($this->form);
        return $this->redirect('/Subjects');
    }

    public function delete($id)
    {
        $subject = Subject::query()->find($id);
        $subject->delete();
        return $this->redirect('/Subjects');
    }

    #[Title('موضوعات بازدید')]
    public function render()
    {
        return view('livewire.subjects');
    }
}
