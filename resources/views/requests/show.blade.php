<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />


<x-app-layout>
    <body class="dark:bg-gray-900">
        <div class="min-h-screen flex items-center justify-center px-4 mt-12">
            <div class="dark:bg-gray-800 dark:text-white max-w-4xl bg-white w-full rounded-lg shadow-xl">
                <div class="p-4 border-b">
                    <h2 class="text-2xl ">
                        Información de la solicitud
                    </h2>
                    <p class="text-sm text-gray-500">
                        Datos personales y solicitud.
                    </p>
                </div>
                <div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Mascota en adopción
                        </p>
                        <p>
                            {{$request->pets->name}} <br>
                            <a target="_blank" class="font-bold text-purple-600" href="/pets/{{$request->pets->id}}">Ver más</a>
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Nombre del solicitante
                        </p>
                        <p>
                            <img style="max-height: 5em;min-width:5em;" class="w-12 h-12 rounded-full" src="{{$request->users->photo}}" alt="user image">
                            {{$request->users->name}}
                        </p>
                    </div>



                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Correo electrónico
                        </p>
                        <p>
                            {{$request->users->email}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            CURP
                        </p>
                        <p>
                            {{$request->users->identification}}
                            {{-- RODL990310HJCJZS05 --}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Acerca
                        </p>
                        <p>
                            {{$request->users->description}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Domicilio
                        </p>
                        <div id="mapa" class="w-full h-60">

                        </div>

                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Archivos
                        </p>
                        <div class="space-y-2">
                            <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                <div class="space-x-2 truncate">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inline text-gray-500" width="24" height="24" viewBox="0 0 24 24"><path d="M17 5v12c0 2.757-2.243 5-5 5s-5-2.243-5-5v-12c0-1.654 1.346-3 3-3s3 1.346 3 3v9c0 .551-.449 1-1 1s-1-.449-1-1v-8h-2v8c0 1.657 1.343 3 3 3s3-1.343 3-3v-9c0-2.761-2.239-5-5-5s-5 2.239-5 5v12c0 3.866 3.134 7 7 7s7-3.134 7-7v-12h-2z"/></svg>
                                    <span>
                                        Foto Identificación
                                    </span>
                                </div>
                                <a href="#" class="text-purple-700 hover:underline">
                                    Ver
                                </a>
                            </div>

                            <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                <div class="space-x-2 truncate">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inline text-gray-500" width="24" height="24" viewBox="0 0 24 24"><path d="M17 5v12c0 2.757-2.243 5-5 5s-5-2.243-5-5v-12c0-1.654 1.346-3 3-3s3 1.346 3 3v9c0 .551-.449 1-1 1s-1-.449-1-1v-8h-2v8c0 1.657 1.343 3 3 3s3-1.343 3-3v-9c0-2.761-2.239-5-5-5s-5 2.239-5 5v12c0 3.866 3.134 7 7 7s7-3.134 7-7v-12h-2z"/></svg>
                                    <span>
                                        Firma
                                    </span>
                                </div>
                                <a href="#" class="text-purple-700 hover:underline">
                                    Ver
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 flex items-center justify-center  px-4 ">

            <div class="dark:bg-gray-800 dark:text-white max-w-4xl bg-white w-full rounded-lg shadow-xl">
                <div class="p-4 border-b">
                    <h2 class="text-2xl ">
                        Proceso de la solicitud
                    </h2>
                    <p class="text-sm text-gray-500">
                        Datos personales y solicitud.
                    </p>
                </div>
                <div>

                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto rounded-xl dark:border-gray-700">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Entrevista</h2>

                            </div>
                        </div>

                        <h2 class="text-2xl font-semibold text-green-500 sm:text-xl dark:text-green-300">Completado <span class="text-base font-medium"></span></h2>
                    </div>

                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto rounded-xl dark:border-gray-700">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Revisión</h2>

                            </div>
                        </div>

                        <h2 class="text-2xl font-semibold text-green-500 sm:text-xl dark:text-green-300">Completado <span class="text-base font-medium"></span></h2>
                    </div>
                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto rounded-xl dark:border-gray-700">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Documentos</h2>

                            </div>
                        </div>

                        <h2 class="text-2xl font-semibold text-green-500 sm:text-xl dark:text-green-300">Completado <span class="text-base font-medium"></span></h2>
                    </div>
                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto rounded-xl dark:border-gray-700">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>

                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Entrega de mascota</h2>

                            </div>
                        </div>

                        <h2 class="text-2xl font-semibold text-green-500 sm:text-xl dark:text-green-300">Completado <span class="text-base font-medium"></span></h2>
                    </div>


                </div>
            </div>

        </div>

        <div class="mt-4 flex items-center justify-center  px-4 ">

            <div class="dark:bg-gray-800 dark:text-white max-w-4xl bg-white w-full rounded-lg shadow-xl">
                <div class="p-4 border-b">
                    <h2 class="text-2xl ">
                        Proceso Final
                    </h2>
                    <p class="text-sm text-gray-500">
                        Datos personales y solicitud.
                    </p>
                </div>
                <div>



                    <button class="bg-transparent mx-12 my-12 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        Generar PDF
                      </button>



                </div>
            </div>

        </div>

    </body>
</x-app-layout>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<script>

    var latitude = {{$request->latitude}};
    var longitude = {{$request->longitude}}

    var map = L.map('mapa').setView([latitude, longitude], 15);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);
</script>
