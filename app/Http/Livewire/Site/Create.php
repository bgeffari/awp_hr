<?php

namespace App\Http\Livewire\Site;

use App\Models\Site;
use Livewire\Component;

class Create extends Component
{
    public Site $site;

    public function mount(Site $site)
    {
        $this->site = $site;
    }

    public function render()
    {
        return view('livewire.site.create');
    }

    public function submit()
    {
        $this->validate();

        $this->site->save();

        return redirect()->route('admin.sites.index');
    }

    protected function rules(): array
    {
        return [
            'site.site_name' => [
                'string',
                'required',
            ],
        ];
    }
}
