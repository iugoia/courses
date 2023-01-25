<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class CourseTable extends Component
{
    public $searchTerm;
    public $courses;
    protected $paginationTheme = 'bootstrap';

    use WithPagination;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $paginator = DB::table('courses')->where('name', 'like', $searchTerm)
            ->orWhere('school', 'like', $searchTerm)->paginate(50);
        $this->courses = $paginator->items();
        return view('livewire.course-table', ['paginator' => $paginator]);
    }
}
