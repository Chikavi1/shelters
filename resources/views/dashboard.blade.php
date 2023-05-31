<x-app-layout>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
     crossorigin="anonymous"></script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           Inicio
        </h2>
    </x-slot>


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


    <div class="py-12">



        <div class="grid grid-cols-12 gap-4 ">
            <div style="background: #c5cbff;color:#7d7e9f" class="md:col-start-2 p-8 col-span-12 md:col-span-4 m-2 bg-white text-gray-700 dark:text-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-2xl my-2">Solicitudes</h2>
                <small>Pendientes</small>
                <h2 class=" text-2xl mb-4 font-bold">
                    <a href="/requests">
                        {{$requests}}
                    </a>
                </h2>
                <a href="/requests/create"  class="pt-2 bg-transparent  hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                    Crear
                </a>
            </div>
            <div  style="background: #c9f1e6;color:#65847b"  class="md:col-span-3 p-8  col-span-12 bg-white m-2 dark:bg-gray-800 text-gray-700 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-2xl my-2">Mascotas</h2>
                <small>En adopción</small>
                <h2 class="mb-4 text-2xl font-bold">
                    <a href="/pets">
                        {{$pets}}
                    </a>
                </h2>

                <a href="/pets/create"  class="text-right bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                    Crear
                </a>
                  {{-- <a href="/pets" class="bg-blue-800 ml-2 hover:bg-blue-500 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Todos
                  </a> --}}

            </div>
            <div style="background: #ffd7ae;"  class="md:col-span-3 p-8   col-span-12 bg-white m-2 dark:bg-gray-800 text-gray-700 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-2xl my-2 mb-16" style="color:#af9177">Perfil</h2>
                <a href="/profile"  class=" bg-transparent  hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                    Editar
                </a>

            </div>
        </div>

        <div class="max-w-8xl mx-auto mt-4 sm:px-6 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                 <h2 class="font-bold text-xl">Bienvenido a Radi Pets Shelters</h2>
                  <p>Estás usando una versión beta de nuestra plataforma.</p><br>
                  <p>Por el momento, utilizamos anuncios para poder pagar los servidores y recursos para crear esta plataforma, agradecemos tu compresion y esperemos pronto no mostrar anuncios.</p> <br>
                  <p>Si encuentras algún  un error o se te ocurre una funcionalidad para la plataforma, puedes mandarnos un mensaje y de paso seguirnos en <a class="font-bold text-xl" href="https://www.instagram.com/radipets/" target="_blank">@radipets</a> o <a  class="font-bold text-xl" target="_blank" href="https://www.facebook.com/radipetsmx">fb/radipetsmx</a>  para ver las novedades en la plataforma.</p>
                </div>
            </div>
        </div>

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

    </div>


    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
@include('layouts.footer')
</x-app-layout>

