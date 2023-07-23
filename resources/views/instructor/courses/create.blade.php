<x-app-layout>

    <div class="container py-8">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2x1 font-bold">CREAR NUEVO CURSO</h1>

                <hr class="mt-2 mb-6">
                {!! Form::open(['route' => 'instructor.courses.store','files' => true,'autocomplete' => 'off']) !!}
                {!! Form::hidden('user_id',auth()->user()->id) !!}
                @include('instructor.courses.partials.form')

                <div class="flex justify-end">
                    {!! Form::submit('Crear nuevo Curso',['class' => 'btn btn-primary cursor-pointer']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
    <script src="{{asset('js/instructor/courses/form.js')}}"></script>

</x-app-layout>
