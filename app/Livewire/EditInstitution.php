<?php

namespace App\Livewire;

use App\Models\Institution;
use App\Models\State;
use App\Models\Type;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class EditInstitution extends Component
{
    public $institution = [];
    public $form = [
        'name' => '',
        'code' => '',
        'principle' => '',
        'address' => '',
        'phone' => '',
        'type_id' => '',
        'gender' => '',
        'state_id' => '',
    ];

    public $states = [];
    public $types = [];
    public $genders = Institution::Genders;

    public function mount($id)
    {
        $this->institution = Institution::query()->find($id);
        $this->form['name'] = $this->institution->name;
        $this->form['code'] = $this->institution->code;
        $this->form['principle'] = $this->institution->principle;
        $this->form['address'] = $this->institution->address;
        $this->form['phone'] = $this->institution->phone;
        $this->form['type_id'] = $this->institution->type_id;
        $this->form['gender'] = $this->institution->gender;
        $this->form['state_id'] = $this->institution->state_id;

        $this->states = State::all();
        $this->types = Type::all();
    }

    public function save()
    {
        $this->validate([
            'form.name' => 'required',
            'form.phone' => 'required',
            'form.address' => 'required',
            'form.code' => $this->form['code'] != $this->institution->code ? 'required|unique:institutions,code' : 'required',
            'form.principle' => 'required',
            'form.gender' => ['required', Rule::in(array_keys($this->genders))],
            'form.type_id' => 'required|exists:types,id',
            'form.state_id' => 'required|exists:states,id',
        ]);
        $this->form['user_id'] = auth()->id();
        $institution = Institution::query()->find($this->institution->id);
        $institution->update($this->form);
        return $this->redirect('/Institutions');
    }

    #[Title('ویرایش آموزشگاه')]
    public function render()
    {
        return view('livewire.edit-institution');
    }
}
