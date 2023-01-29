<?php

namespace App\Http\Livewire;

use DateTime;
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
        $date = new DateTime(DB::table('courses')->first()->created_at);
        $date = $date->format('Y.m.d');
        return view('livewire.course-table', ['paginator' => $paginator, 'date' => $date]);
    }
}
