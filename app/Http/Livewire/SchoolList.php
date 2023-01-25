<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class SchoolList extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $paginator = DB::table('schools')->paginate(20);
        $schools = $paginator->items();
        return view('livewire.school-list', ['paginator' => $paginator, 'schools' => $schools]);
    }
}
