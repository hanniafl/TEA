<x-instructor-layout :course="$course">

    @if (session('info'))
    <div class="alert alert-success bg bg-green-600 mt-4 font-bold text-center text-2xl">
        {{session('info')}}
    </div>  
    @endif   
    <h1 class="text-2xl font-bold ">OBSERVACIONES DEL CURSO</h1>
    <hr class="mb-6 mt-2">

    <div class="text-gray-500">
        {!!$course->observation->body!!}
    </div>

</x-instructor-layout>