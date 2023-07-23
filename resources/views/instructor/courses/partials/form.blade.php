<div class="mb-4">
    {!! Form::label('title','Título del curso') !!}
    {!! Form::text('title',null,['class' =>'form-input block w-full mt-1' . ($errors->has('title') ? ' border-red-600' : '')]) !!}
    @error('title')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('slug','Slug del curso') !!}
    {!! Form::text('slug',null,['readonly'=>'readonly','class' =>'form-input block w-full mt-1' . ($errors->has('slug') ? ' border-red-600' : '')]) !!}
    @error('slug')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('subtitle','Subtítulo del curso') !!}
    {!! Form::text('subtitle',null,['class' =>'form-input block w-full mt-1' . ($errors->has('subtitle') ? ' border-red-600' : '')]) !!}
    @error('subtitle')
     <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="mb-4">
    {!! Form::label('description','Descripción del curso') !!}
    {!! Form::textarea('description',null,['class' =>'form-input block w-full mt-1' . ($errors->has('description') ? ' border-red-600' : '')]) !!}
    @error('description')
        <strong class="text-xs text-red-600">{{$message}}</strong>
    @enderror
</div>

<div class="grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría: ') !!}
        {!! Form::select('category_id',$categories,null,['class' => 'form-input block w-full mt-1'  ]) !!}

    </div>
    <div>
        {!! Form::label('level_id', 'Niveles: ') !!}
        {!! Form::select('level_id',$levels,null,['class' => 'form-input block w-full mt-1']) !!}
    </div>

    <div>
        {!! Form::label('price_id', 'Precios: ') !!}
        {!! Form::select('price_id',$prices,null,['class' => 'form-input block w-full mt-1']) !!}
    </div>

</div>
<h1 class="text-2xl font-bold mt-8 mb-2">Imagen del curso</h1>
<div class="grid grid-cols-2 gap-4">
    <figure>
        @isset($course->image)
            <img id="picture" class="w-full h-64 object-cover object-center" src="{{Storage::url($course->image->url)}}" alt="">
        @else
            <img id="picture" class="w-full h-64 object-cover object-center" src="https://images.pexels.com/photos/4497759/pexels-photo-4497759.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
        @endisset
    </figure>

    <div>
        <p class="mb-2">la siguiente imagen que puede disponer a subir puede ser de cualquier tamaño siempre y cuando sean cuadradas en los formatos jpg y png.</p>
        {!! Form::file('file',['class' => 'form-input w-full' . ($errors->has('file') ? ' border-red-600' : ''),'id' => 'file','accept' => 'image/*']) !!}

        @error('file')
        <strong class="text-xs text-red-600">{{$message}}</strong>
        @enderror

    </div>
</div>
