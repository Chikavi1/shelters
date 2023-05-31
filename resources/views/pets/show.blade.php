<x-app-layout>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
     crossorigin="anonymous"></script>

    <body class="dark:bg-gray-900">

        <div class="grid grid-cols-12 gap-4">
            <div class="md:col-start-2 md:col-span-10 col-">
                <ins class="adsbygoogle mx-auto"
                style="display:block"
                data-ad-client="ca-pub-7789760036582954"
                data-ad-slot="8479090430"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            </div>
        </div>

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
                        <a href="/pets/{{$pet->id}}/edit" class=" bg-green-500 mt-24 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
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
