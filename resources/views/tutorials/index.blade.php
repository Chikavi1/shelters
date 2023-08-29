
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

    <section class="px-4 py-24 mx-auto max-w-7xl">
        <h2 class="mb-2 text-3xl font-extrabold leading-tight text-gray-900">Tutoriales</h2>
        <p class=" text-lg text-gray-500">Conoce algunos de los tutoriales que hicimos para ti.</p>
        <p class="mb-20 text-lg text-gray-500">Si no encuentras algun tutorial o tienes alguna duda, no dudes en contactarnos para resolverlo.</p>
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
                @foreach ($tutorials as $tutorial )
                    <div>

                        <h2 class="mb-2 text-lg font-semibold text-gray-900">
                        <a href="/tutorials/{{$tutorial->id}}" class="text-gray-900 hover:text-purple-700">{{$tutorial->title}}</a>
                        </h2>
                        <p class="mb-3 text-sm font-normal text-gray-500">
                            {{$tutorial->subtitle}}
                        </p>
                        <p class="mb-3 text-sm font-normal text-gray-500">
                            3 minutos
                        </p>
                    </div>
                @endforeach
            </div>

    </section>
    <div class="md:p-4 mt-6  md:mx-40">
        <div class="bg-gray-100 p-4 md:p-8 rounded-xl">
            <div class="grid grid-cols-12 gap-3">
                <div class="col-span-12 md:col-span-6 md:p-4">
                    <h2 class="text-2xl md:text-4xl font-bold ">¿Cómo registrar una mascota en Radi Org?</h2>
                    <p class="mt-4">Descubre cómo añadir una mascota a tu perfil en Radi Org! Sigue nuestros simples pasos para subir el perfil de tu compañero peludo en esta emocionante comunidad y sé de en adopción!</p>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <iframe class="w-11/12 md:w-full h-80 md:h-96 rounded-xl" src="https://www.youtube.com/embed/yb09TsfY8I4?si=fN2kYY-rMH_D2pDt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>

        </div>
    </div>

    <div class="md:p-4 mt-6  md:mx-40">
        <div class="bg-gray-100 p-4 md:p-8 rounded-xl">
            <div class="grid grid-cols-12 gap-3">
                <div class="col-span-12 md:col-span-6 md:p-4">
                    <h2 class="text-2xl md:text-4xl font-bold ">¿Cómo crear una solicitud de adopción en Radi Org?</h2>
                    <p class="mt-4">Aprende a solicitar adopción en Radi Org. Sigue nuestros simples pasos para completar el proceso de adopción. ¡Descubre lo fácil que es!</p>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <iframe class="w-11/12 md:w-full h-80 md:h-96 rounded-xl"  src="https://www.youtube.com/embed/urEgAynb74o?si=AmSqzUOpZL-0F6SP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>

        </div>
    </div>

</body>
