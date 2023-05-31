

@if ($message = Session::get('success'))
<div class="bg-green-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        {{ $message }}
    </p>
  </div>
@endif

@if ($message = Session::get('error'))
<div class="bg-red-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        {{ $message }}
    </p>
  </div>
@endif

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Perfil
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <p class="text-right text-white" >
                    <a href="https://www.radi.pet/org/{{Auth::user()->setHiddenId()}}" target="_blank" class="text-right text-white font-bold underline">Ver</a>

                    <a href="profile/edit" class="text-right text-white font-bold underline">Editar</a>
                </p>
                <div class="max-w-xl mx-auto">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <p class="text-right text-white">
                    <a href="profile/edit" class="text-right text-white font-bold underline">Editar</a>
                </p>
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                         Ubicacion
                        </h2>


                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                          Se muestra la ubicación de tu albergue o fundación.
                        </p>
                        <div id="mapa" style="border-radius:1em;min-height:10em; min-width:15em;" class="mt-4 w-full h-60">

                        </div>
                        <p  class="dark:text-white mt-4"> Dirección:</p>
                        <h5 class="dark:text-white ">{{ $user->address }}</h5>
                    </header>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <p class="text-right text-white">
                    <a href="profile/sign" class="text-right text-white font-bold underline">Editar</a>
                </p>
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                         Firma
                        </h2>


                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                          Es importante poner la firma del encargado del albergue/refugio para generar el contrato y el certificado de adopción.
                        </p>
                        <img src="{{Auth::user()->sign}}" alt="firma">
                    </header>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


<script>

    var latitude = {{$user->latitude}};
    var longitude = {{$user->longitude}}

    var map = L.map('mapa').setView([latitude, longitude], 15);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);

    L.marker([latitude,longitude]).addTo(map)
    .bindPopup('{{$user->name}}')
    .openPopup();
</script>
