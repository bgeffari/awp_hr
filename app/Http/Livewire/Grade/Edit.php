<?php

namespace App\Http\Livewire\Grade;

use App\Models\Grade;
use Livewire\Component;

class Edit extends Component
{
    public Grade $grade;

    public function mount(Grade $grade)
    {
        $this->grade = $grade;
    }

    public function render()
    {
        return view('livewire.grade.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->grade->save();

        return redirect()->route('admin.grades.index');
    }

    protected function rules(): array
    {
        return [
            'grade.grade' => [
                'numeric',
                'required',
            ],
        ];
    }
}
