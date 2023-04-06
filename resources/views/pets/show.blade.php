<x-app-layout>
    <body class="dark:bg-gray-900">
        <div class="min-h-screen flex items-center justify-center px-4 mt-12">

            <div class="dark:bg-gray-800 dark:text-white max-w-4xl bg-white w-full rounded-lg shadow-xl">
                <div class="p-4 border-b">
                    <h2 class="text-2xl ">
                        Información de la mascota
                    </h2>
                    <p class="text-sm text-gray-500 mb-6">
                        Datos de la mascota
                    </p>
                    <a href="/pets/{{$pet->id}}/edit" class="bg-green-500 mt-24 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Editar
                      </a>
                </div>
                <div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                           Nombre de la mascota
                        </p>
                        <div>
                            <img style="max-height: 15em;min-width:15em;" class="mx-auto rounded-md" src="{{$pet->photo}}" alt="user image">
                           <h2 class="font-bold text-3xl text-center py-8">{{$pet->name}}</h2>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Acerca
                        </p>
                        <p>
                            {{$pet->description}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Especie
                        </p>
                        <p>
                            {{$pet->specie}}
                        </p>
                    </div>



                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Tamaño
                        </p>
                        <p>
                            {{$pet->size}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Esterilizado
                        </p>
                        <p>
                            {{$pet->sterelized}}
                            {{-- RODL990310HJCJZS05 --}}
                        </p>
                    </div>

                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Domicilio de la mascota
                        </p>
                        <p>
                            {{$pet->latitude}},{{$pet->longitude}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Enfermedades cronicas
                        </p>
                        <p>
                            {{$pet->chronic_disease}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Información extra
                        </p>
                        <div class="space-y-2">
                            <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                <div class="space-x-2 truncate">
                                    <span>
                                       Vacunas
                                    </span>
                                </div>
                                <a href="#" class="text-purple-700 hover:underline">
                                    Ver
                                </a>
                            </div>

                            <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                <div class="space-x-2 truncate">
                                    <span>
                                        Esterilizaciones
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

    </body>
</x-app-layout>
