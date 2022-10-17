<?php

namespace App\Http\Livewire\Sector;

use App\Models\Sector;
use Livewire\Component;

class Create extends Component
{
    public Sector $sector;

    public function mount(Sector $sector)
    {
        $this->sector = $sector;
    }

    public function render()
    {
        return view('livewire.sector.create');
    }

    public function submit()
    {
        $this->validate();

        $this->sector->save();

        return redirect()->route('admin.sectors.index');
    }

    protected function rules(): array
    {
        return [
            'sector.sector' => [
                'string',
                'required',
            ],
        ];
    }
}
