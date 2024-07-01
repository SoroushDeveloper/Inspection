<?php

namespace App\Livewire;

use App\Models\Major;
use App\Models\Property;
use Livewire\Attributes\Title;
use Livewire\Component;

class Properties extends Component
{
    public $properties = [];

    public $majors = [];

    public $form = [
        'title' => '',
        'major_id' => '',
    ];

    public function mount()
    {
        $this->properties = Property::all();
        $this->majors = Major::all();
    }

    public function save()
    {
        $this->validate([
            'form.title' => 'required',
            'form.major_id' => 'required|exists:majors,id',
        ]);
        $this->form['user_id'] = auth()->id();
        Property::query()->create($this->form);
        return $this->redirect('/Properties');
    }

    public function delete($id)
    {
        $property = Property::query()->find($id);
        $property->delete();
        return $this->redirect('/Properties');
    }

    #[Title('ویژگی های فنی')]
    public function render()
    {
        return view('livewire.properties');
    }
}
