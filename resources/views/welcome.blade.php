@include('layouts.nav')


<section class="px-4 py-6 mx-auto max-w-7xl">
    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">

        <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
            Únete al  <span class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-purple-500 lg:inline">cambio </span> en la vida de las mascotas.
      </h1>
      <p class="px-0  text-lg text-gray-600 md:text-xl lg:px-24">
        Utiliza nuestra plataforma y descubre las herramientas que ofrecemos para colaborar en la mejora de la calidad de vida de las mascotas.    </p>
      {{-- <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
        @if (Route::has('login'))
            @auth
            <a href="{{ url('/dashboard') }}" class="text-white bg-purple-800 px-4 py-2 rounded-md font-bold text-2xl inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" >
                Iniciar
              </a>
            @else
            <a href="{{ route('login') }}" class="text-white mt-4 bg-purple-800 px-4 py-2 rounded-md font-bold text-2xl inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" >
                Ingresar
            </a>
            <a href="{{ route('pre-register') }}" class="text-white mt-4 bg-green-800 px-4 py-2 rounded-md font-bold text-2xl inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" >
                Pre Registro
            </a>
            @endauth
        @endif
      </div> --}}
    </div>
    {{-- <div class="w-full mx-auto mt-20 text-center md:w-10/12">
      <img  class="w-72 mx-auto" src="{{ asset('img/landing.png')}}" alt="software screenshot" class="w-full rounded-lg shadow-2xl" />
    </div> --}}
    <div class="px-4 py-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8  py-6">
      <div class="grid gap-8 row-gap-5 md:grid-cols-2">
        <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
          <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
          <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
          <div class="relative flex flex-col h-full p-5 bg-white rounded-sm lg:items-center lg:flex-row">

              <a href="/org" aria-label="" class="inline-flex items-center text-sm transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
              <div class="flex flex-col justify-between flex-grow">
                  <div>
                    <i class="fa-solid fa-heart text-4xl text-red-800"></i>

                <h6 class="mb-2 font-semibold leading-5">
                 Organizaciones
                </h6>
                <p class="mb-2 text-sm text-gray-900">
                    Si eres una organización, albergue, refugio o una persona dedicada a la adopción responsable, te invitamos a unirte a nuestra plataforma de forma gratuita. En ella, podrás crear perfiles de mascotas disponibles para adopción y gestionar las solicitudes de adopción, todo en un mismo lugar.
                </p>
              </div>
              <p class="font-bold text-green-800">
                  Ver más
                </p>
            </div>
        </a>
          </div>
        </div>
        <div class="relative p-px overflow-hidden transition duration-300 transform border rounded shadow-sm hover:scale-105 group hover:shadow-xl">
          <div class="absolute bottom-0 left-0 w-full h-1 duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          <div class="absolute bottom-0 left-0 w-1 h-full duration-300 origin-bottom transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
          <div class="absolute top-0 left-0 w-full h-1 duration-300 origin-right transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
          <div class="absolute bottom-0 right-0 w-1 h-full duration-300 origin-top transform scale-y-0 bg-deep-purple-accent-400 group-hover:scale-y-100"></div>
          <div class="relative flex flex-col h-full p-5 bg-white rounded-sm lg:items-center lg:flex-row">

              <a href="/bridge" aria-label="" class="inline-flex items-center text-sm transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
            <div class="flex flex-col justify-between flex-grow">
                <div>
                  <i class="fa-solid fa-house md:-mt-8 text-4xl text-green-800"></i>
                <h6 class="mb-2 font-semibold leading-5">
                  Casas puentes
              </h6>
                <p class="mb-2 text-sm text-gray-900">
                   Conviértete en casa puente o un hogar temporal y contribuye al bienestar de las fundaciones necesitadas. Tu participación puede marcar la diferencia en la vida de una mascota.                </p>
              </div>
              <p class="font-bold text-green-800">
                Ver más
              </p>
            </div>
              </a>
          </div>
        </div>
      </div>
    </div>
  </section>






  {{-- <section class="px-4 pt-20 pb-24 mx-auto max-w-7xl md:px-2">
    <h1 class="mb-12 text-xl font-bold text-left md:text-3xl md:text-center">Preguntas Frecuentes</h1>
    <div class="flex items-start justify-start mb-12">
      <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-6 h-6 mr-4 text-gray-700" aria-hidden="true">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        ></path>
      </svg>
      <div>
        <p class="mt-0 mb-3 font-semibold text-gray-900">¿Que es Radi Pets Albergues?</p>
        <p class="text-gray-600">
          Radi Pets Albergues es una plataforma diseñada para ayudar a las organizaciones o refugios de animales a gestionar sus operaciones de manera más eficiente y efectiva. <br> La plataforma ofrece diversas herramientas y funcionalidades que les permiten administrar solicitudes de adopción, crear perfiles de mascotas para su adopción, agregar información relevante para donaciones, entre otras funcionalidades útiles.
       <br><br>¡Únete a nuestra comunidad hoy mismo y comienza a marcar la diferencia!
        </p>
      </div>
    </div>
    <div class="flex items-start justify-start mb-12">
      <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-6 h-6 mr-4 text-gray-700" aria-hidden="true">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        ></path>
      </svg>

      <div>
        <p class="mt-0 mb-3 font-semibold text-gray-900">¿Radi Pets Albergues es gratis?</p>
        <p class="text-gray-600">
            ¡Estamos emocionados de ofrecerte nuestra plataforma totalmente gratuita! <br> Nos apasiona ayudar a albergues y refugios en todo el mundo a simplificar su trabajo y a conectarse con comunidades que aman a los animales. <br><br> Con nuestra plataforma fácil de usar, podrás administrar tus adopciones, voluntarios, donaciones y más sin costo alguno.
        </p>
      </div>
    </div>
    <div class="flex items-start justify-start mb-12">
      <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-6 h-6 mr-4 text-gray-700" aria-hidden="true">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        ></path>
      </svg>
      <div>
        <p class="mt-0 mb-3 font-semibold text-gray-900">¿Cómo me registro?</p>
        <p class="text-gray-600">
            Para registrarte en nuestra plataforma, por favor envíanos un <a target="_blank" class="text-purple-500 font-bold" href="https://www.instagram.com/radipets">mensaje</a>  con la información de tu albergue o refugio o ingresa al pre-registro <a href="/pre-register" class="font-bold text-purple-800">aquí</a>. Nuestro equipo revisará la información para validar tu registro y te informaremos en cuanto tu cuenta esté activa. ¡Gracias por unirte a nuestra comunidad de adopción de mascotas!
        </p>
      </div>
    </div>
    <div class="flex items-start justify-start mb-12">
      <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-6 h-6 mr-4 text-gray-700" aria-hidden="true">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        ></path>
      </svg>
      <div>
        <p class="mt-0 mb-3 font-semibold text-gray-900">¿Cómo puedo recibir donaciones a través de esta plataforma</p>
        <p class="text-gray-600">
            En la sección de tu perfil, puedes agregar tu enlace de PayPal para recibir donaciones directamente en tu cuenta. <br> Además, existen otras formas de recibir ayuda, como crear una lista de deseos en Amazon y compartirla, o agregar tus datos bancarios para que las personas puedan hacer una transferencia directa. <br> Te recomendamos proporcionar varias opciones para que las personas puedan elegir la que mejor les funcione.
        </p>
      </div>
    </div>
    <div class="text-center">
      <div>
        <span>¡Gracias por utilizar nuestra plataforma para promover la adopción de mascotas!</span>

      </div>
    </div>
  </section> --}}


  {{-- <iframe style="width: 100%;" height="800" src="https://www.artsteps.com/embed/6445761285f767ac04b9d3fa/560/315" frameborder="0" allowfullscreen></iframe> --}}


@include('layouts.footer')
