<?php

namespace App\Livewire;

use App\Models\Common;
use App\Models\Consistency;
use App\Models\Inspection;
use App\Models\Institution;
use App\Models\Major;
use App\Models\Property;
use App\Models\State;
use App\Models\Subject;
use App\Models\Type;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    public $users = 0;
    public $inspections = 0;
    public $institutions = 0;
    public $states = 0;
    public $majors = 0;
    public $types = 0;
    public $properties = 0;
    public $commons = 0;
    public $consistencies = 0;
    public $subjects = 0;

    public function mount()
    {
        $this->users = User::count();
        $this->inspections = Inspection::count();
        $this->institutions = Institution::count();
        $this->states = State::count();
        $this->majors = Major::count();
        $this->types = Type::count();
        $this->properties = Property::count();
        $this->commons = Common::count();
        $this->consistencies = Consistency::count();
        $this->subjects = Subject::count();
    }

    #[Title('میز کار')]
    public function render()
    {
        return view('livewire.home');
    }
}
