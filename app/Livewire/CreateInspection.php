<?php

namespace App\Livewire;

use App\Models\Common;
use App\Models\Consistency;
use App\Models\Inspection;
use App\Models\Institution;
use App\Models\Major;
use App\Models\Subject;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Morilog\Jalali\Jalalian;

class CreateInspection extends Component
{
    use WithFileUploads;

    public $institutions = [];
    public $subjects = [];
    public $consistencies = [];
    public $majors = [];
    public $commons = [];

    public $form = [
        'institution_id' => '',
        'subject_id' => '',
        'consistency_id' => '',
        'major_id' => '',
        'advantages' => '',
        'disadvantages' => '',
        'description' => '',
        'operations' => '',
    ];
    public $files = [];

    public function mount()
    {
        $this->institutions = Institution::all();
        $this->subjects = Subject::all();
        $this->consistencies = Consistency::all();
        $this->majors = Major::all();
        $this->commons = Common::all();
    }

    public function save()
    {
        $this->validate([
            'form.institution_id' => 'required',
            'form.subject_id' => 'required',
            'form.consistency_id' => 'required',
            'form.major_id' => 'required',
            'form.advantages' => 'required',
            'form.disadvantages' => 'required',
            'form.description' => 'nullable',
            'form.operations' => 'nullable',
        ]);
        $this->form['user_id'] = auth()->id();
        $this->form['advantages'] = json_encode($this->form['advantages']);
        $this->form['disadvantages'] = json_encode($this->form['disadvantages']);
        $inspection = Inspection::query()->create($this->form);
        if (!is_null($this->files)) {
            foreach ($this->files as $file) {
                $year = Jalalian::now()->format('%Y');
                $month = Jalalian::now()->format('%m');
                $filename = time() . '-' . $file->getClientOriginalName() . '.' . $file->getClientOriginalExtension();
                $location = public_path('/public_data/inspections/' . $year . '/' . $month);
                $file->move($location, $filename);
                $inspection->files()->create([
                    'name' => $file->getClientOriginalName(),
                    'nameFile' => "/public_data/inspections/$year/$month/$filename",
                    'extension' => $file->getClientOriginalExtension(),
                ]);
            }
        }
        return $this->redirect('/Inspections');
    }

    #[Title('ثبت بازرسی')]
    public function render()
    {
        return view('livewire.create-inspection');
    }
}
