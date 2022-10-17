<?php

namespace App\Http\Livewire\EmployeeI;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\EmployeeI;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithSorting;
    use WithConfirmation;

    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }

    public function mount()
    {
        $this->sortBy            = 'id';
        $this->sortDirection     = 'desc';
        $this->perPage           = 100;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new EmployeeI())->orderable;
    }

    public function render()
    {
        $query = EmployeeI::with(['location', 'sector', 'department', 'grade', 'major'])->advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $employeeIs = $query->paginate($this->perPage);

        return view('livewire.employee-i.index', compact('employeeIs', 'query'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('employee_i_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        EmployeeI::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(EmployeeI $employeeI)
    {
        abort_if(Gate::denies('employee_i_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employeeI->delete();
    }
}
