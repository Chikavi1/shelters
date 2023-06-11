<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate() !!}

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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="../../resources/js/app.js"> </script> --}}
</head>
<body>

<section class="px-4 py-24 mx-auto max-w-7xl">
    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">

        <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
        Administra las adopciones de tu<span class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-purple-500 lg:inline"> albergue</span> en un solo lugar.
      </h1>
      <p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24">
        Utiliza nuestras herramientas para llegar a más personas.
    </p>
      <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
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


      </div>
    </div>
    <div class="w-full mx-auto mt-20 text-center md:w-10/12">
      <img  class="w-72 mx-auto" src="{{ asset('img/landing.png')}}" alt="software screenshot" class="w-full rounded-lg shadow-2xl" />
    </div>
  </section>




  <section class="px-4 pt-20 pb-24 mx-auto max-w-7xl md:px-2">
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
          Radi Pets Albergues es una plataforma diseñada para ayudar a los albergues o refugios de animales a gestionar sus operaciones de manera más eficiente y efectiva. <br> La plataforma ofrece diversas herramientas y funcionalidades que les permiten administrar solicitudes de adopción, crear perfiles de mascotas para su adopción, agregar información relevante para donaciones, entre otras funcionalidades útiles.
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
  </section>


  {{-- <iframe style="width: 100%;" height="800" src="https://www.artsteps.com/embed/6445761285f767ac04b9d3fa/560/315" frameborder="0" allowfullscreen></iframe> --}}


</body>
@include('layouts.footer')
