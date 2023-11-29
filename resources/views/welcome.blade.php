<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TTX3KKS0FH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TTX3KKS0FH');
</script>

{{--
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="http://org.radi.pet/">
        <meta property="og:title" content="Radi Pets Albergues">
        <meta property="og:description" content="Administrar tu albergue o refugio nunca ha sido tan fácil.
        ¡Únete a nuestra plataforma y simplifica tu trabajo! Gestiona las adopciones, voluntarios, donaciones y más en un solo lugar.">
        <meta property="og:image" content="{{ asset('img/default.png')}}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="http://org.radi.pet/">
        <meta property="twitter:title" content="Radi Pets Albergues">
        <meta property="twitter:description" content="Administrar tu albergue o refugio nunca ha sido tan fácil.
        ¡Únete a nuestra plataforma y simplifica tu trabajo! Gestiona las adopciones, voluntarios, donaciones y más en un solo lugar.">
        <meta property="twitter:image" content="{{ asset('img/default.png')}}"> --}}


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link
    href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
    rel="stylesheet"
  />
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- <script src="../../resources/js/app.js"> </script> --}}
</head>


<body>

    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">

        <div class="relative flex items-center justify-between">
          <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">

            <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Radi ORG</span>
          </a>
          <ul class="flex items-center hidden space-x-8 lg:flex">
            <li><a href="/org" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Organizaciones</a></li>
            <li><a href="/volunteers" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Casas puentes</a></li>
            {{-- <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Ayudar</a></li> --}}

            {{-- <li>
              <a
                href="/"
                class="inline-flex text-purple-700 items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                aria-label="Sign up"
                title="Sign up"
              >
                Apoyar
              </a>
            </li> --}}
          </ul>
          <!-- Mobile menu -->
          <div class="lg:hidden">

            <!-- Mobile menu dropdown
            <div class="absolute top-0 left-0 w-full">
              <div class="p-5 bg-white border rounded shadow-sm">
                <div class="flex items-center justify-between mb-4">
                  <div>
                    <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                      <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                      </svg>
                      <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                    </a>
                  </div>
                  <div>
                    <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                      <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                        <path
                          fill="currentColor"
                          d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                </div>
                <nav>
                  <ul class="space-y-4">
                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                    <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                    <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                    <li>
                      <a
                        href="/"
                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                        aria-label="Sign up"
                        title="Sign up"
                      >
                        Sign up
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            -->
          </div>
        </div>
      </div>


<section class="px-4 py-24 mx-auto max-w-7xl">
    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">

        <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
            Únete al  <span class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-purple-500 lg:inline">cambio </span> en la vida de las mascotas.
      </h1>
      <p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24">
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
    <div class="px-4 py-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
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
                Ver más
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
                  <i class="fa-solid fa-house -mt-8 text-4xl text-green-800"></i>
                <h6 class="mb-2 font-semibold leading-5">
                  Casas puentes
              </h6>
                <p class="mb-2 text-sm text-gray-900">
                   Conviértete en casa puente o un hogar temporal y contribuye al bienestar de las fundaciones necesitadas. Tu participación puede marcar la diferencia en la vida de una mascota.                </p>
              </div>
              Ver más
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


</body>
@include('layouts.footer')
