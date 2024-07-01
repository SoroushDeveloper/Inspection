<?php

namespace App\Livewire;

use App\Models\Major;
use Livewire\Attributes\Title;
use Livewire\Component;

class Majors extends Component
{
    public $majors = [];

    public $form = [
        'title' => '',
        'code' => '',
    ];

    public function mount()
    {
        $this->majors = Major::all();
    }

    public function save()
    {
        $this->validate([
            'form.title' => 'required',
            'form.code' => 'required',
        ]);
        $this->form['user_id'] = auth()->id();
        Major::query()->create($this->form);
        return $this->redirect('/Majors');
    }

    public function delete($id)
    {
        $major = Major::query()->find($id);
        $major->delete();
        return $this->redirect('/Majors');
    }

    #[Title('رشته های تحصیلی')]
    public function render()
    {
        return view('livewire.majors');
    }
}
