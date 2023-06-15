<x-app-layout>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
     crossorigin="anonymous"></script>

    <body class="dark:bg-gray-900">

        {{-- <div class="grid grid-cols-12 gap-4">
            <div class="md:col-start-2 md:col-span-10 col-">
                <ins class="adsbygoogle mx-auto"
                style="display:block"
                data-ad-client="ca-pub-7789760036582954"
                data-ad-slot="8479090430"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            </div>
        </div> --}}

        <div class="py-12 min-h-screen flex items-center justify-center px-4 mt-12">

            <div class="dark:bg-gray-800 dark:text-white max-w-4xl bg-white w-full rounded-lg shadow-xl">
                <div class="p-4 border-b">
                    <h2 class="text-2xl ">
                        Información de la mascota
                    </h2>
                    <p class="text-sm text-gray-500 mb-6">
                        Datos de la mascota
                    </p>
                    <h2 class="mb-4">
                        @if($pet->status == 2)
                            <span class="text-yellow-800 font-bold">En adopción</span>
                        @else
                            <span class="text-green-800 font-bold">
                                Adoptado
                            </span>
                        @endif
                    </h2>
                    @if($pet->status == 2)
                        <a href="/pets/{{$hash}}/edit" class=" bg-green-500 mt-24 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Editar
                        </a>
                    @endif
                </div>
                <div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                           Nombre de la mascota
                        </p>
                        <div>
                            <img style="max-height: 15em;min-width:15em;" class="mx-auto rounded-md" src="{{$pet->photo}}" alt="user image">
                           <h2 class="capital font-bold text-3xl text-center py-8">{{$pet->name}}</h2>
                           <div class="flex flex-col-reverse">
                            <dt class="text-sm font-medium text-gray-600 dark:text-white">Compartir en Redes Sociales</dt>

                            <div class="sharing-buttons flex flex-wrap">
                                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fradi.pet%2Fpet%2F{{$hash}}" aria-label="Share on Facebook">
                                  <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                    <title>Facebook</title>
                                    <path d="M379 22v75h-44c-36 0-42 17-42 41v54h84l-12 85h-72v217h-88V277h-72v-85h72v-62c0-72 45-112 109-112 31 0 58 3 65 4z">
                                    </path>
                                  </svg>
                                </a>
                                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fradi.pet%2Fpet%2F{{$hash}}&amp;text=Conoce%20el%20perfil%20de%20{{$pet->name}}%20en%20Radi%20Pets%0A" aria-label="Share on Twitter">
                                  <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                    <title>Twitter</title>
                                    <path d="m459 152 1 13c0 139-106 299-299 299-59 0-115-17-161-47a217 217 0 0 0 156-44c-47-1-85-31-98-72l19 1c10 0 19-1 28-3-48-10-84-52-84-103v-2c14 8 30 13 47 14A105 105 0 0 1 36 67c51 64 129 106 216 110-2-8-2-16-2-24a105 105 0 0 1 181-72c24-4 47-13 67-25-8 24-25 45-46 58 21-3 41-8 60-17-14 21-32 40-53 55z">
                                    </path>
                                  </svg>
                                </a>
                                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://wa.me/?text=Conoce%20el%20perfil%20de%20{{$pet->name}}%20en%20Radi%20Pets%0A%20https%3A%2F%2Fradi.pet%2Fpet%2F{{$hash}}" aria-label="Share on Whatsapp" draggable="false">
                                  <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                    <title>Whatsapp</title>
                                    <path d="M413 97A222 222 0 0 0 64 365L31 480l118-31a224 224 0 0 0 330-195c0-59-25-115-67-157zM256 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 0 1 287-229c34 36 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-32-17-54-30-75-66-6-10 5-10 16-31 2-4 1-7-1-10l-17-41c-4-10-9-9-12-9h-11c-4 0-9 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-14 37-27s5-24 4-26c-2-2-5-4-11-6z">
                                    </path>
                                  </svg>
                                </a>
                                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://telegram.me/share/url?text=Conoce%20el%20perfil%20de%20{{$pet->name}}%20en%20Radi%20Pets%0A&amp;url=https%3A%2F%2Fradi.pet%2Fpet%2F{{$hash}}" aria-label="Share on Telegram" draggable="false">
                                  <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                    <title>Telegram</title>
                                    <path d="M256 8a248 248 0 1 0 0 496 248 248 0 0 0 0-496zm115 169c-4 39-20 134-28 178-4 19-10 25-17 25-14 2-25-9-39-18l-56-37c-24-17-8-25 6-40 3-4 67-61 68-67l-1-4-5-1q-4 1-105 70-15 10-27 9c-9 0-26-5-38-9-16-5-28-7-27-16q1-7 18-14l145-62c69-29 83-34 92-34 2 0 7 1 10 3l4 7a43 43 0 0 1 0 10z">
                                    </path>
                                  </svg>
                                </a>
                                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="mailto:?subject=Conoce%20el%20perfil%20de%20{{$pet->name}}%20en%20Radi%20Pets%0A&amp;body=https%3A%2F%2Fradi.pet%2Fpet%2F{{$hash}}" aria-label="Share by Email" draggable="false">
                                  <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                                    <title>Email</title>
                                    <path d="M464 64a48 48 0 0 1 29 86L275 314c-11 8-27 8-38 0L19 150a48 48 0 0 1 29-86h416zM218 339c22 17 54 17 76 0l218-163v208c0 35-29 64-64 64H64c-35 0-64-29-64-64V176l218 163z">
                                    </path>
                                  </svg>
                                </a>
                              </div>
                        </div>

                        <a class="dark:text-white"  href="https://radi.pet/pet/{{$hash}}" target="_blank">Ver en Radi Pets</a>

                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Acerca
                        </p>
                        <p class="capital">
                            {{$pet->description}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Especie
                        </p>
                        @if($pet->specie == 1)
                            <p class="text-gray-500 dark:text-gray-400">Gato</p>
                        @else
                            <p class="text-gray-500 dark:text-gray-400">Perro</p>
                        @endif
                    </div>

                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Género
                        </p>
                        @if($pet->gender == 1)
                        <p class="text-gray-500 dark:text-gray-400">Macho</p>
                    @else
                        <p class="text-gray-500 dark:text-gray-400">Hembra</p>
                    @endif

                    </div>

                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Raza
                        </p>
                        <p class="text-gray-500 dark:text-gray-400" id="specie"></p>

                    </div>



                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Tamaño
                        </p>
                        <p>
                            @switch($pet->size)

                            @case('mn')
                                <span >Mini</span>
                            @break
                            @case('sm')
                                <span class="status">Pequeño</span>
                            @break
                            @case('md')
                                <span class="status">Mediano</span>
                            @break
                            @case('lg')
                                <span class="status">Grande</span>
                            @break
                            @case('xl')
                                <span class="status">Extra Grande</span>
                            @break
                            @default
                            <span class="status">N/A</span>
                            @endswitch

                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Esterilizado
                        </p>
                        <p>
                            {{$pet->sterelized?'Si':'No'}}
                        </p>
                    </div>

                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Ubicación de la mascota
                        </p>
                        <p>

                            @if($pet->latitude)
                                <div id="mapa" class="col-span-12 h-64" style="border-radius:1em;min-height:10em; min-width:15em;" class="mt-4 w-full h-60">

                                </div>
                            @else
                                <h2>No tiene ubicación definida, por favor edita la ubicación.</h2>
                            @endif
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Enfermedades cronicas
                        </p>
                        <p class="capital">
                            {{$pet->chronic_disease}}
                        </p>
                    </div>
                    {{-- <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4">
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
                    </div> --}}
                </div>
            </div>

        </div>

    </body>

    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</x-app-layout>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>


<script>

        if({{$pet->specie}} == 1){
            breeds('cat');
        }else{
            breeds('dog');
        }

    function breeds(breed){

        var url = '';
        if(breed == 'cat'){
            url = "{{ asset('json/cats.json')}}"
        }else{
            url = "{{ asset('json/dogs.json')}}"
        }

        var data = [];

        $.getJSON(url,function(result){
            $("#specie").append(result[{{$pet->breed}}-1].name);

        });

    }

    var latitude = {{$pet->latitude}};
    var longitude = {{$pet->longitude}};

    var map = L.map('mapa').setView([latitude, longitude], 15);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);

    L.marker([latitude,longitude]).addTo(map)
    .bindPopup('Aquí se encuentra').openPopup();

</script>
