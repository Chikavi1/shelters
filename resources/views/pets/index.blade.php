
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
            <ins class="adsbygoogle mx-auto"
            style="display:block"
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
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white">Mascotas</h2>
                </div>

                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Listado de las mascotas en adopción.</p>
            </div>

            <div class="flex items-center mt-4 gap-x-3">
                {{-- <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_3098_154395)">
                        <path d="M13.3333 13.3332L9.99997 9.9999M9.99997 9.9999L6.66663 13.3332M9.99997 9.9999V17.4999M16.9916 15.3249C17.8044 14.8818 18.4465 14.1806 18.8165 13.3321C19.1866 12.4835 19.2635 11.5359 19.0351 10.6388C18.8068 9.7417 18.2862 8.94616 17.5555 8.37778C16.8248 7.80939 15.9257 7.50052 15 7.4999H13.95C13.6977 6.52427 13.2276 5.61852 12.5749 4.85073C11.9222 4.08295 11.104 3.47311 10.1817 3.06708C9.25943 2.66104 8.25709 2.46937 7.25006 2.50647C6.24304 2.54358 5.25752 2.80849 4.36761 3.28129C3.47771 3.7541 2.70656 4.42249 2.11215 5.23622C1.51774 6.04996 1.11554 6.98785 0.935783 7.9794C0.756025 8.97095 0.803388 9.99035 1.07431 10.961C1.34523 11.9316 1.83267 12.8281 2.49997 13.5832" stroke="currentColor" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_3098_154395">
                        <rect width="20" height="20" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                    <span>Import</span>
                </button> --}}

                <a href="/pets/create" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <span>
                        Crear Mascota</span>
                </a>
            </div>
        </div>

        {{-- <div class="mt-6 md:flex md:items-center md:justify-between">
            <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                    Pendientes
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    Adoptados
                </button>

                <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                    En Proceso
                </button>
            </div>

            <div class="relative flex items-center mt-4 md:mt-0">


                <input type="text" placeholder="Buscar" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
        </div> --}}

        @if(count($pets) != 0)
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
                                            Situación
                                        </th>

                                        <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Tamaño
                                        </th>

                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Especie
                                        </th>

                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Género
                                        </th>


                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Nacimiento</th>


                                        <th scope="col" class="relative py-3.5 px-4">
                                            <span class="sr-only">Editar</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                    @foreach ($pets as $pet)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                <div>
                                                    <p class="text-sm font-normal text-gray-600 dark:text-gray-400 capital">{{$pet->name}}</p>
                                                </div>
                                            </td>

                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                @if($pet->status == 2)
                                                    <div class="inline px-3 py-1 text-sm font-normal rounded-full text-yellow-500 gap-x-2 bg-yellow-100/60 dark:bg-gray-800">
                                                        <span class="text-sm font-normal text-orange-600 dark:text-orange-400 capital">Sin adoptar</span>
                                                    </div>
                                                @elseif($pet->status == 1)
                                                    <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                                        <span class="text-sm font-normal text-green-600 dark:text-green-400 capital">Adoptado</span>
                                                    </div>
                                                @endif
                                            </td>

                                            <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                <div class="dark:text-white" >
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
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    @if($pet->specie == 1)
                                                        <p class="text-gray-500 dark:text-gray-400">Gato</p>
                                                    @else
                                                        <p class="text-gray-500 dark:text-gray-400">Perro</p>
                                                    @endif

                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    @if($pet->gender == 1)
                                                        <p class="text-gray-500 dark:text-gray-400">Macho</p>
                                                    @else
                                                        <p class="text-gray-500 dark:text-gray-400">Hembra</p>
                                                    @endif
                                                </div>
                                            </td>

                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400">{{ date('d/M/Y', strtotime($pet->birthday))  }}</p>
                                            </td>

                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <a target="_blank" href="/pets/{{$pet->setHiddenId()}}" class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 ">
                                                   <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                                    <svg fill="#ffff" class="w-6 h-6 ml-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
                                                        <g>
                                                        <path d="m494.8,241.4l-50.6-49.4c-50.1-48.9-116.9-75.8-188.2-75.8s-138.1,26.9-188.2,75.8l-50.6,49.4c-11.3,12.3-4.3,25.4 0,29.2l50.6,49.4c50.1,48.9 116.9,75.8 188.2,75.8s138.1-26.9 188.2-75.8l50.6-49.4c4-3.8 11.7-16.4 0-29.2zm-238.8,84.4c-38.5,0-69.8-31.3-69.8-69.8 0-38.5 31.3-69.8 69.8-69.8 38.5,0 69.8,31.3 69.8,69.8 0,38.5-31.3,69.8-69.8,69.8zm-195.3-69.8l35.7-34.8c27-26.4 59.8-45.2 95.7-55.4-28.2,20.1-46.6,53-46.6,90.1 0,37.1 18.4,70.1 46.6,90.1-35.9-10.2-68.7-29-95.7-55.3l-35.7-34.7zm355,34.8c-27,26.3-59.8,45.1-95.7,55.3 28.2-20.1 46.6-53 46.6-90.1 0-37.2-18.4-70.1-46.6-90.1 35.9,10.2 68.7,29 95.7,55.4l35.6,34.8-35.6,34.7z"/>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <a target="_blank" href="/pets/{{$pet->setHiddenId()}}/edit" class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 ">
                                                    <button class="text-gray-200 ">
                                                        <i class="fa-solid fa-pen-to-square w-6 h-6"></i>
                                                    </button>
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

            {{ $pets->links() }}
        @else
            <h2 class="py-44 text-center font-bold dark:text-white">No tienes mascotas
            </h2>

        @endif
    </section>
{{--
    <ins class="adsbygoogle"
    style="display:block;background:red;"
    data-ad-client="ca-pub-7789760036582954"
    data-ad-slot="8479090430"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins> --}}
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

@include('layouts.footer')

</x-app-layout>

