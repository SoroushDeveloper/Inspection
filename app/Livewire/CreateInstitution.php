<?php

namespace App\Livewire;

use App\Models\Institution;
use App\Models\State;
use App\Models\Type;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class CreateInstitution extends Component
{
    public $states = [];
    public $types = [];
    public $genders = Institution::Genders;

    public $form = [
        'name' => '',
        'phone' => '',
        'address' => '',
        'code' => '',
        'principle' => '',
        'gender' => '',
        'type_id' => '',
        'state_id' => '',
    ];

    public function mount()
    {
        $this->states = State::all();
        $this->types = Type::all();
    }

    public function save()
    {
        $this->validate([
            'form.name' => 'required',
            'form.phone' => 'required',
            'form.address' => 'required',
            'form.code' => 'required|unique:institutions,code',
            'form.principle' => 'required',
            'form.gender' => ['required', Rule::in(array_keys($this->genders))],
            'form.type_id' => 'required|exists:types,id',
            'form.state_id' => 'required|exists:states,id',
        ]);
        $this->form['user_id'] = auth()->id();
        Institution::query()->create($this->form);
        return $this->redirect('/Institutions');
    }

    #[Title('ثبت آموزشگاه')]
    public function render()
    {
        return view('livewire.create-institution');
    }
}
