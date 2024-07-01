<?php

namespace App\Livewire;

use App\Models\Institution;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowInstitution extends Component
{
    public $institution = [];

    public function mount($id)
    {
        $this->institution = Institution::query()->find($id);
    }

    #[Title('مشاهده آموزشگاه')]
    public function render()
    {
        return view('livewire.show-institution');
    }
}
