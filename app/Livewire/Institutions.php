<?php

namespace App\Livewire;

use App\Models\Institution;
use Livewire\Attributes\Title;
use Livewire\Component;

class Institutions extends Component
{
    public $institutions = [];

    public function mount()
    {
        $this->institutions = Institution::all();
    }

    public function delete($id)
    {
        $institution = Institution::query()->find($id);
        $institution->delete();
        return $this->redirect('/Institutions');
    }

    #[Title('آموزشگاه ها')]
    public function render()
    {
        return view('livewire.institutions');
    }
}
