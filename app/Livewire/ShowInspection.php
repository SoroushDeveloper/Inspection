<?php

namespace App\Livewire;

use App\Models\Inspection;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowInspection extends Component
{
    public $inspection = [];

    public function mount($id)
    {
        $this->inspection = Inspection::query()->find($id);
    }

    #[Title('مشاهده بازرسی')]
    public function render()
    {
        return view('livewire.show-inspection');
    }
}
