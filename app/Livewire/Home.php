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
use Illuminate\Validation\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    public $count = [
        'users' => '---',
        'inspections' => '---',
        'institutions' => '---',
        'states' => '---',
        'majors' => '---',
        'types' => '---',
        'properties' => '---',
        'commons' => '---',
        'consistencies' => '---',
        'subjects' => '---',
    ];

    public $form = [
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'password' => '',
        'personal_code' => '',
    ];

    public function mount()
    {
        $this->count['users'] = User::count();
        $this->count['inspections'] = Inspection::count();
        $this->count['institutions'] = Institution::count();
        $this->count['states'] = State::count();
        $this->count['majors'] = Major::count();
        $this->count['types'] = Type::count();
        $this->count['properties'] = Property::count();
        $this->count['commons'] = Common::count();
        $this->count['consistencies'] = Consistency::count();
        $this->count['subjects'] = Subject::count();
        $this->form['first_name'] = auth()->user()->first_name;
        $this->form['last_name'] = auth()->user()->last_name;
        $this->form['email'] = auth()->user()->email;
        $this->form['personal_code'] = auth()->user()->personal_code;
    }

    public function save()
    {
        $this->validate([
            'form.first_name' => 'required|max:255',
            'form.last_name' => 'required|max:255',
            'form.password' => $this->form['password'] == "" ? 'nullable' : 'required|min:4',
            'form.email' => $this->form['email'] == auth()->user()->email ? 'required|email' : 'required|email|unique:users,email',
            'form.personal_code' => $this->form['personal_code'] == auth()->user()->personal_code ? 'required' : 'required|unique:users,personal_code',
        ]);
        $this->form['password'] = $this->form['password'] == "" ? auth()->user()->password : $this->form['password'];
        auth()->user()->update($this->form);
        return $this->redirect(route('Home'));
    }

    #[Title('میز کار')]
    public function render()
    {
        return view('livewire.home');
    }
}
