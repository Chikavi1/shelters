
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
        <div>

            <h2 class="mb-2 text-lg font-semibold text-gray-900">
            <a href="/tutorials/1" class="text-gray-900 hover:text-purple-700">Process Documents Using Artificial Intelligence For RPA Bots</a>
            </h2>
            <p class="mb-3 text-sm font-normal text-gray-500">
            Earlier RPA bots used to have some limitations like it would take structured data for processing from excel, database, on these data. But with advancements in technology like OCR (Optical
            Character Recognition) and Machine Learning, RPA bots are capable of extracting these data …
            </p>
            <p class="mb-3 text-sm font-normal text-gray-500">
                3 minutos
            </p>
        </div>
        <div>

            <h2 class="mb-2 text-lg font-semibold text-gray-900">
            <a href="/tutorials/1" class="text-gray-900 hover:text-purple-700">Implement Dark Mode in Your Android App</a>
            </h2>
            <p class="mb-3 text-sm font-normal text-gray-500">
            Are you curious to implement the Dark Mode in Android Application? Here’s the perfect guideline to attain the Dark Mode in Android Application. Don’t waste your time; just implement and enjoy
            Dark Mode.
            </p>
            <p class="mb-3 text-sm font-normal text-gray-500">
                3 minutos
            </p>
        </div>
        <div>

            <h2 class="mb-2 text-lg font-semibold text-gray-900">
            <a href="/tutorials/1" class="text-gray-900 hover:text-purple-700">Why is Mental Health one of the Important Issues to Address?</a>
            </h2>
            <p class="mb-3 text-sm font-normal text-gray-500">
            Mental health was one of the under spoken topics before this lockdown. After sitting at home for about six months I realized that this is one of the important issues to address not only in the
            work sector but also in daily living.
            </p>
            <p class="mb-3 text-sm font-normal text-gray-500">
                3 minutos
            </p>
        </div>
        <div>

            <h2 class="mb-2 text-lg font-semibold text-gray-900">
            <a href="/tutorials/1" class="text-gray-900 hover:text-purple-700">Pattern Matching In Elixir</a>
            </h2>
            <p class="mb-3 text-sm font-normal text-gray-500">
            Pattern matching is a great way to write idiomatic functional code. It’s a powerful tenant of functional programming that makes it a joy to write conditional statements. If you don’t want your
            code to be peppered with deeply nested statements or multiple variations of similar business logic, use pattern matching!
            </p>
            <p class="mb-3 text-sm font-normal text-gray-500">
                3 minutos
            </p>
        </div>
        <div>

            <h2 class="mb-2 text-lg font-semibold text-gray-900">
            <a href="/tutorials/1" class="text-gray-900 hover:text-purple-700">3 things you should change during your focus group interview</a>
            </h2>
            <p class="mb-3 text-sm font-normal text-gray-500">We changed three things about our feedback sessions, and it changed everything about running customer feedback sessions.</p>
            <p class="mb-3 text-sm font-normal text-gray-500">
                3 minutos
            </p>
        </div>
        <div>

            <h2 class="mb-2 text-lg font-semibold text-gray-900">
            <a href="/tutorials/1" class="text-gray-900 hover:text-purple-700">Using Webpack with React Typescript</a>
            </h2>
            <p class="mb-3 text-sm font-normal text-gray-500">
            Ever wondered if there is a way to just tie up all your code into one single module for easy usage. If so, in this article I will show you how to bundle all your code into a single javascript
            module that you can easily use in any other project.
            </p>
            <p class="mb-3 text-sm font-normal text-gray-500">
                3 minutos
            </p>
        </div>
        </div>

    </section>
</body>
