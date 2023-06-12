<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/foto6.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2"> 
                <h1 class="text-white font-fold text-4xl"> TEApp los mejores cursos para niños con autismo.</h1>
                <p class="text-white text-lg mt-2">TEApp puede servir como herramienta a niñas y niños con TEA, Trastorno del Espectro Autista. Con el objetivo de aprender a identificar emociones, desarrolla tanto la empatía como el aprendizaje y la inteligencia emocional. </p>
                @livewire('search')

            
                </div>
            
            </div>
        </div>
    </section>
                
     @livewire('courses-index')
</x-app-layout>