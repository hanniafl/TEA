<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseStatus extends Component
{
    public $course;

    public function mount(Course $course){
        $this->course = $course;

    }

    public function render()
    {
        return view('livewire.course-status');
    }
}
