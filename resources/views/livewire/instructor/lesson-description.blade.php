<div>
    <article class="card" x-data='{open: false}'>
        <div class="card-body">
            <header>
                <h1 x-on:click='open= !open' class="cursor-pointer">
                  Descripcion de la leccion  
                </h1>
            </header>
            <div x-show='open'>
                <hr class="my-2">
                @if ($lesson->description)
                    <form wire:submit.prevent="update">
                       
                        <textarea wire:model="description.name" class="form-input w-full"></textarea>
                        @error('description.name')
                            <span class="text-red-500 text-xs">{{$message}}</span>
                        @enderror
                        <div class="flex justify-end">
                            <button wire:click="destroy" class="btn btn-danger text-sm" type="button">Eliminar</button> 
                            <button class="btn btn-primary text-sm ml-2"type="submit">Actualizar</button>
                        </div>
                    </form>
                @else

                <div>
                       
                    <textarea wire:model="name" class="form-input w-full" placeholder="Agregue una descripcion de la leccion"></textarea>
                    @error('name')
                        <span class="text-red-500 text-xs">{{$message}}</span>
                    @enderror
                    <div class="flex justify-end">
                        <button wire:click="store"class="btn btn-primary text-sm ml-2">Agregar</button>
                    </div>
                </div>

                @endif
            </div>
        </div>
    </article>
</div>
