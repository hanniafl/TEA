<x-app-layout>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">
        <h1 class="text-gray-500 text-3xl font-bold">
            Detalle del pedido
        </h1>
        <div class="card text-gray-600">
            <div class="card-body">

                <article class="flex item-center">
                    <img class="h-12 w-12 object-cover" src="{{Storage::url('$course->img->url')}}" alt="">
                    <h1 class="text-lg ml-2">{{$course->title}}</h1>
                    <p class="text-xl font-bold ml-auto">$ {{$course->price->value}}</p>
                </article>
                <div class='flex justify-end mt-2 mb-4'>
                    <a href="{{route('payment.pay',$course)}}" class="btn btn-primary">Comprar curso</a>

                </div>
                <hr>
                <p class="text-sm mt-4">La empresa !course junto a sus asociados y profesores se reservan el derecho a reembolsar la cantidad de dinero despues de 30 dias <a class="text-red-500 font-bold">Terminos & Condiciones </a></p>
            </div>
        </div>
    </div>
</x-app-layout>