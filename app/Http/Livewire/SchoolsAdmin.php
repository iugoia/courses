<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class SchoolsAdmin extends Component
{
    public $searchTerm;
    public $schools;
    protected $paginationTheme = 'bootstrap';

    use WithPagination;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $paginator = DB::table('schools')->where('name', 'like', $searchTerm)
            ->orWhere('id', 'like', $searchTerm)->paginate(10);
        $this->schools = $paginator->items();
        return view('livewire.schools-admin', ['paginator' => $paginator]);
    }
}
