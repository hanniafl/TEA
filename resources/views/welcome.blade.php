<x-app-layout>
    {{--Portada--}}
    <section class="bg-cover" style="background-image: url({{asset('img/home/fondo.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
            <h1 class="text-white font-fold text-4xl ">Domina la tecnologia web con TEA</h1>
            <p class="text-white text-lg mt-2 mb-4"  > En TEA encontraras cursos, manuaes y articulos que te ayudaran a convertirte en un profesional del desarrollo web </p>
            
       @livewire('search')
        
        </div>
        </div>
    </section>
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6"> CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/1.jpg')}}" alt="" />
                </figure>
                <header mt-2>
                    <h1 class="text-center text-xl text-gray-800">Cursos y proyectos</h1>

                </header>
                <p class="text-sm text-gray-500">Los mejores cursos y proyectos dentro del ramo web</p>
            
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/2.jpg')}}" alt="" />
                </figure>
                <header mt-2>
                    <h1 class="text-center text-xl text-gray-800">Curso laravel </h1>

                </header>
                <p class="text-sm text-gray-500">Se enseñara la manera correcta de como se maneja el franwork laravel en su version 8</p>
            
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/3.jpg')}}" alt="" />
                </figure>
                <header mt-2>
                    <h1 class="text-center text-xl text-gray-800">Blog</h1>

                </header>
                <p class="text-sm text-gray-500">Articulos de programacion y desarrollo web, para potenciar tu aprendizaje</p>
            
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/4.jpg')}}" alt="" />
                </figure>
                <header mt-2>
                    <h1 class="text-center text-xl text-gray-800">Desarrollo Web</h1>

                </header>
                <p class="text-sm text-gray-500">Si tienes una idea de un desarrollo web contactanos</p>
            
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
       
        <h1 class="text-center text-white text-3xl">¿No sabes que curso llevar?</h1>
        <p class="text-center text-white">Dirigete al catalogo de cursos disponible y filtralos por categoria o nivel</p>
        <div class="flex justify-center mt-4">
            <a href="{{ route('courses.index')}}"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ">
                Catalogo de cursos
            </a>
        </div>
    </section>
    <section class="my-24 ">
        <h1 class="text-center text-gray-600 text-3xl">ULTIMOS CURSOS</h1>
            <p class="text-center text-gray-500 text-sm mb-6">Trabajando duro para ofrecerte un mejor servicio</p>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-x-6 gap-y-8">
                @foreach($courses as $course)

                <x-course-card :course="$course"/>


                @endforeach

        
            </div>
        </section>

        <script>
            var botmanWidget={
                aboutText:"Bienvenido",
                introMessage:"Hola, By TEA"
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js"></script>
</x-app-layout>

