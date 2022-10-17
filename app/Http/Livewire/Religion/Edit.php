<?php

namespace App\Http\Livewire\Religion;

use App\Models\Religion;
use Livewire\Component;

class Edit extends Component
{
    public Religion $religion;

    public function mount(Religion $religion)
    {
        $this->religion = $religion;
    }

    public function render()
    {
        return view('livewire.religion.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->religion->save();

        return redirect()->route('admin.religions.index');
    }

    protected function rules(): array
    {
        return [
            'religion.religion' => [
                'string',
                'required',
            ],
        ];
    }
}
