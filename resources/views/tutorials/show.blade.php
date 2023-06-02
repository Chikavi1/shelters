<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Radi Pets Albergues</title>
    <meta name="title" content="Radi Pets Albergues">
    <meta name="description" content="Administrar tu albergue o refugio nunca ha sido tan fácil. ¡Únete a nuestra plataforma y simplifica tu trabajo! Gestiona las adopciones, voluntarios, donaciones y más en un solo lugar.">
    <meta name="keywords" content="Albergues de mascotas, solicitudes de adopción, adoptar, Perfiles de mascotas, adoptar mascota, adoptar perro, albergues de perros,Voluntarios,Donaciones">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">

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
        <meta property="twitter:image" content="{{ asset('img/default.png')}}">
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
<body >
    <div class="md:px-20">
        <div class=" pt-12 px-8 sm:max-w-xl   md:px-24  lg:py-20">
            <div class="flex flex-col justify-between lg:flex-row">
              <div class="mb-12 lg:max-w-lg lg:pr-5 lg:mb-0">
                <div class=" mb-6">
                    <p>Tutorial</p>
                  <h2 class=" mb-6 font-sans text-4xl md:text-5xl font-bold tracking-tight text-gray-900  sm:leading-none">
                    {{$tutorial->title}}
                  </h2>
                  <p class=" text-gray-700 text-lg">
                    {{$tutorial->subtitle}}
                </div>
                <div class="flex">
                  <div class="flex flex-col">
                    <div class="text-lg font-semibold">{{$tutorial->time}} min</div>
                    <div class="text-sm text-gray-700">Tiempo estimado</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @foreach($steps as $step => $s )
            <div class="px-4 py-16 mx-auto   md:px-24 lg:px-8 lg:py-20">
                <div class="grid gap-10 lg:grid-cols-2">
                <div class="lg:pr-10">
                    <h5 class="mb-4 text-4xl font-extrabold leading-none">
                        Paso {{ $loop->index+1 }}
                    </h5>
                    <p class="mb-6 text-gray-900 text-xl">
                        {!! $s['step'] !!}
                    </p>
                    <hr class="mb-5 border-gray-300" />
                </div>
                <div>
                    <img class="mx-auto h-96 rounded shadow-lg sm:h-96" src="{{$s['image']}}" alt="" />
                </div>
                </div>
            </div>
          @endforeach


    </div>
</body>
  @include('layouts.footer')
