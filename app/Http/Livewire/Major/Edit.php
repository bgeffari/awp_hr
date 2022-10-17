<?php

namespace App\Http\Livewire\Major;

use App\Models\Major;
use Livewire\Component;

class Edit extends Component
{
    public Major $major;

    public function mount(Major $major)
    {
        $this->major = $major;
    }

    public function render()
    {
        return view('livewire.major.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->major->save();

        return redirect()->route('admin.majors.index');
    }

    protected function rules(): array
    {
        return [
            'major.majors' => [
                'string',
                'required',
            ],
        ];
    }
}
