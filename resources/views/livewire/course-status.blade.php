<div class="mt-8">
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <div class="embed-responsive">
                {{--mostrar video--}}
            {!!$current->iframe!!}
            </div>
            {{$current->name}}
            @if ($current->description)
            <div class="text-gray-600">
                {{$current->description->name}}
            </div>
            @endif   
            <div class="flex justify-between mt-4">
                {{--marcar como culminada--}}
                <div class="flex items-center  cursor-pointer" wire:click="completed">
                    @if ($current->completed)
                    <i class="fa fa-toggle-on text-2xl text-blue-600"></i>
                    @else
                        <i class="fa fa-toggle-off text-2xl text-gray-600"></i>
                    @endif
                    <p class="text-sm ml-2">Marcar unidad como culminada</p>
                </div>
                @if ($current->resource)
                    <div class="flex items-center text-gray-600 cursor-pointer" wire:click="download">
                        <i class="fa fa-download text-lg  "></i>
                        <p class="text-sm ml-2">Descargar recursos</p>
                    </div>

                @endif
            </div>

            <div class="card mt-2">
                <div class="card-body flex text-gray-500 font-bold">
                    @if ($this->previous)
                         <a wire:click="changeLesson({{$this->previous}})" class="cursor-pointer ">Tema anterior</a>
                    @endif
                   @if ($this->next)
                         <a wire:click="changeLesson({{$this->next}})" class="ml-auto cursor-pointer">Siguiente tema</a> 
                   @endif

                </div>
            </div>
           
         
        </div>

        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl leading-8 text-center mb-4">{{$course->title}}</h1>
                <div class="flex items-center">
                    <figure>
                        <img class="w-12 h-12 object-cover rounded-full mr-4" src="{{$course->teacher->profile_photo_url}}" alt="">
                    </figure>
                    <div>
                        <p>{{$course->teacher->name}}</p>
                        <a class="text-blue-500 text-sm" href="">{{'@'.Str::slug($course->teacher->name,'')}}</a>
                    </div>

                </div>
                <p class="text-gray-600 text-sm mt-2">{{$this->advance. '%'}} completado</p>
                <div class="relative pt-1">
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200">
                      <div style="width:{{$this->advance. '%'}}" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500 transition-all duration-500"></div>
                    </div>
                  </div>
                <ul>
                    @foreach ($course->sections as $section)
                        <li class="text-gray-600 mb-1">
                            <a class="font-bold text-base inline-block mb-2" href="">{{$section->name}}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                <li class="flex">
                                    <div>
                                       @if ($lesson->completed)
                                            @if ($current->id==$lesson->id)
                                                <span class="inline-block w-4 h-4 border-2 border-yellow-400 rounded-full mr-2 mt-1"></span>
                                            @else
                                                <span class="inline-block w-4 h-4 bg-yellow-400 rounded-full mr-2 mt-1"></span>
                                            @endif
                                       
                                       @else
                                        @if ($current->id==$lesson->id)
                                             <span class="inline-block w-4 h-4 border-2 border-gray-500 rounded-full mr-2 mt-1"></span>
                                        @else
                                             <span class="inline-block w-4 h-4 bg-gray-500 rounded-full mr-2 mt-1"></span>
                                        @endif
                                       
                                       @endif
                                    </div>
                                    <a wire:click="changeLesson({{$lesson}})" class="cursor-pointer">{{$lesson->name}}
                                    </a>
                                </li>
                                    
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
</div>
