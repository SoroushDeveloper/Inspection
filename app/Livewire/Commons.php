<?php

namespace App\Livewire;

use App\Models\Common;
use Livewire\Attributes\Title;
use Livewire\Component;

class Commons extends Component
{
    public $commons = [];

    public $form = [
        'title' => '',
    ];

    public function mount()
    {
        $this->commons = Common::all();
    }

    public function save()
    {
        $this->validate([
            'form.title' => 'required',
        ]);
        $this->form['user_id'] = auth()->id();
        Common::query()->create($this->form);
        return $this->redirect('/Commons');
    }

    public function delete($id)
    {
        $common = Common::query()->find($id);
        $common->delete();
        return $this->redirect('/Commons');
    }

    #[Title('ویژگی های غیر فنی')]
    public function render()
    {
        return view('livewire.commons');
    }
}
