<?php

namespace App\Livewire;

use App\Models\Inspection;
use Livewire\Attributes\Title;
use Livewire\Component;

class Inspections extends Component
{
    public $inspections = [];

    public function mount()
    {
        $this->inspections = Inspection::all();
    }

    public function delete($id)
    {
        $inspection = Inspection::query()->find($id);
        $inspection->delete();
        return $this->redirect('/Inspections');
    }

    #[Title('بازرسی ها')]
    public function render()
    {
        return view('livewire.inspections');
    }
}
