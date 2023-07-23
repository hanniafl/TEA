<x-instructor-layout :course="$course">
    @if (session('info'))
    <div class="alert alert-success bg bg-green-600 mt-4 font-bold text-center text-2xl">
        {{session('info')}}
    </div>  
    @endif

   <div>
       @livewire('instructor.courses-goals', ['course' => $course], key('courses-goals' .$course->id))
   </div>

   <div class="my-8">
    @livewire('instructor.courses-requirements', ['course' => $course], key('courses-requirements' .$course->id))
    </div>

    <div>
        @livewire('instructor.courses-audiences', ['course' => $course], key('courses-audiences' .$course->id))
    </div>

</x-instructor-layout>