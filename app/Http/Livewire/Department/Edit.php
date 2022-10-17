<?php

namespace App\Http\Livewire\Department;

use App\Models\Department;
use Livewire\Component;

class Edit extends Component
{
    public Department $department;

    public function mount(Department $department)
    {
        $this->department = $department;
    }

    public function render()
    {
        return view('livewire.department.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->department->save();

        return redirect()->route('admin.departments.index');
    }

    protected function rules(): array
    {
        return [
            'department.department' => [
                'string',
                'required',
            ],
        ];
    }
}
