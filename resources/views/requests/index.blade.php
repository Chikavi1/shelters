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
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
     crossorigin="anonymous"></script>

     {{-- <div class="grid grid-cols-12 gap-4">
        <div class="md:col-start-2 md:col-span-10 col-">
            <ins class="adsbygoogle"
                style="display:block;"
                data-ad-client="ca-pub-7789760036582954"
                data-ad-slot="8479090430"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
        </div>
    </div> --}}



    <section class="container px-6 mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">
            <div>
                <div class="flex items-center gap-x-3 mt-6">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">Solicitudes</h2>
                </div>

                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Listado de las últimas solicitudes.</p>
            </div>

            <a href="/requests/create" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

                <span>
                    Crear Solicitud</span>
            </a>

        </div>

        {{-- <div class="mt-6 md:flex md:items-center md:justify-between">
            <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                    Pendientes
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    Aceptadas
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    Canceladas
                </button>
            </div>

            <div class="relative flex items-center mt-4 md:mt-0">


                <input type="text" placeholder="Buscar" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div> --}}




        @if(count($requests) != 0)
            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 ">
                                <thead class="bg-gray-50 dark:bg-gray-800 ">
                                    <tr>
                                        <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            <button class="flex items-center gap-x-3 focus:outline-none">
                                                <span>Nombre</span>

                                                <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                                </svg>
                                            </button>
                                        </th>

                                        <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Correo
                                        </th>

                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Mascota
                                        </th>

                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Estatus</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Fecha
                                        </th>


                                        <th scope="col" class="relative py-3.5 px-4">
                                            <span class="sr-only">Editar</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                    @foreach ($requests as $request)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                <div>
                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400">{{$request->users?$request->users->name:'SIN INFO'}}</p>
                                                </div>
                                            </td>
                                            <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                                    {{$request->users?$request->users->email:'SIN INFO'}}
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <h4 class="text-gray-700 dark:text-gray-200">{{$request->pets->name}}</h4>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <h4 class="text-gray-700 dark:text-gray-200">
                                                    @switch($request->status)

                                                    @case(1)
                                                        <span style="color:rgb(255, 143, 6);">Pendiente</span>
                                                    @break
                                                    @case(2)
                                                        <span style="color:green;" class="status">Finalizada</span>
                                                    @break
                                                    @case(3)
                                                        <span class="status">Documentos</span>
                                                    @break
                                                    @case(4)
                                                        <span class="status">Visita a domicilio</span>
                                                    @break
                                                    @case(5)
                                                        <span class="status">Entrega mascota</span>
                                                    @break
                                                    @case(6)
                                                        <span class="status">En proceso de adaptación</span>
                                                    @break
                                                    @default
                                                    <span  style="color:rgb(143, 1, 1);"  class="status">Cancelada</span>
                                                    </h4>
                                            @endswitch

                                                </div>
                                            </td>

                                            <td class="px-4 py-4 text-sm whitespace-nowrap dark:text-gray-200">
                                                    {{ date('d/M/Y', strtotime($request->createdAt))  }}
                                            </td>

                                             {{-- <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="w-48 h-1.5 bg-blue-200 overflow-hidden rounded-full">
                                                    <div class="bg-blue-500 w-2/3 h-1.5"></div>
                                                </div>
                                            </td> --}}

                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <a target="_blank" href="/requests/{{$request->setHiddenId()}}" class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{ $requests->links() }}
        @else
        <h2 class="py-44 text-center font-bold dark:text-white">No tienes solicitudes de adopción
        @endif
    </section>

    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
@include('layouts.footer')
</x-app-layout>

</body>

