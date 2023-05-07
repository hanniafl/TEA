<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/foto1.jpg')}})">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
        <div class="w-full md:w-3/4 lg:w-1/2"> 
        <h1 class="text-white font-fold text-4xl"> TEApp una pagina para niños con autismo.</h1>
        <p class="text-white text-lg mt-2">Es una pagina web que puede servir como herramienta a niñas y niños con TEA, Trastorno del Espectro Autista. Para así aprender a identificar emociones, desarrolla tanto la empatía como el aprendizaje y la inteligencia emocional. </p>
        <!-- component -->
<!-- This is an example component -->
        </div>

        <div class="pt-2 relative mx-auto text-gray-600">
            <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
              type="search" name="search" placeholder="Search">
    
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                Buscar
              </button>
    
          </div>
        
        </div>
        </div>
    </section>
    
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6"> CONTENIDO</h1>
    
        <div class="max-w 7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/foto2.jpg')}}" alt="">
                </figure>
    
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700"> TEA </h1>
                </header>
    
                <p class="text-sm text-gray-500">Los trastornos del espectro autista (TEA) son discapacidades del desarrollo causadas por diferencias en el cerebro.</p>
    
            </article>
    
            <article>
                <figure>
                    <img  class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/foto3.jpg')}}" alt="">
                </figure>
    
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700"> Cursos </h1>
                </header>
    
                <p class="text-sm text-gray-500">Nuestros cursos estan pensados para todo tipo de niveles </p>
            </article>
    
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/foto4.jpg')}}" alt="">
                </figure>
    
                <h1 class="text-center text-xl text-gray-700"> Acerca de </h1>
            </header>
    
            <p class="text-sm text-gray-500">Nuestros objetivo es un programa disenado para ninos del espectro autista</p>
            </article>
    
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/foto5.jpg')}}" alt="">
                </figure>
                <h1 class="text-center text-xl text-gray-700"> Contacto </h1>
            </header>
    
            <p class="text-sm text-gray-500">Quieres decirnos algo? Envianos un email y cuentanos lo que necesites. Prometemos responder rapido :-) </p>
            </article>
    
        </div>
    
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl"> No sabes que curso puede llevar tu hijo?</h1>
        <p class="text-center text-white"> Dirigete al catalogo de cursos y filtralos por categoria o nivel</p>
    
        <div class="flex justify-center mt-4">
          <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Catalogo de cursos
          </a>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-center text-3xl text-gray-600"> ULTIMOS CURSOS </h1>
        <p class="text-center text-gray-500 text-sm -scroll-mb-6"> Ultimos cursos actualizados</p>
    
        @foreach ($courses as $course)
            <article class="bg-white shadow-lg rounded overflow-hidden">
                <a class="h-36 w-full object-cover" img src="{{Storage::url($course->url)}}" alt="">
    
                <div class="px-6 py-4">
                    <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title, 40)}}</h1>
                    <p class="text-gray-600 text-sm mb-2">Prof: {{$course->teacher->name}}</p>
                 
                    <div class ="flex">
                    <ul class="flex text-sm">

                    </ul>

                    <p class="text-sm text-gray-500 ml-auto">
                        <i class="fas fa-users"></i>
                         ({{$course->students_count}})
                     </p>
                    </div>

                    <a href="{{route('courses.show', $course)}}" class="w-full mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        
                        Curso
                      </a>
                </div>
            </article>
                
            @endforeach
    
        </div>
    
    
    </section>
    
    
    </x-app-layout>