<div class="fixed hidden insert-0  bg-opacity-50 fixed overflow-y-auto h-screen w-full z-50	" id="modal">
    <div class="relative top-20 mx-auto p-5 border w-full md:w-1/2 shadow-lg rounded-md bg-white">
    <div class="mt-3 text-center">
        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full">
            <img src="/img/dc-light.png"  alt="">
        </div>
        <h3 class="text-lg leading-6 font-medium" style="color:#3b1687">Radi Pets</h3>
        <div class="mt-2 py-3">
    <!-- component -->
    <div>
    <section class="text-gray-700">
      <div class="container py-4 ">
        <div class="text-center mb-2">
          <h1 class="sm:text-3xl text-2xl font-medium text-center " style="color:#3b1687">
                Identificación
          </h1>

        </div>
        <div>
            <img class="mx-auto" width="300" height="150" src="{{$request->id_photo}}" alt="">
            <p class="mt-2"><i class="fa-solid fa-circle-info"></i> Recuerda que la confidencialidad de los datos es primordial.
            </p>
        </div>
      </div>
    </section>
  </div>
        </div>
        <div class="items-center px-4 ">

            <button id="cancel-btn"  class="px-4  text-gray-800
                            text-base font-medium rounded-md w-full
                            shadow-sm  ">

            </button>
            <div class="p-6  flex items-center justify-center">
                <button id="ok-btn" class="px-4 py-2 bg-red-500 text-white
                text-base font-medium rounded-md w-full
                shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
                    Cerrar
                </button>

            </div>



        </div>
    </div>

        </div>
    </div>
</div>





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


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
    crossorigin="anonymous"></script>

<x-app-layout>




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

@php
    $steps = 0;
    if($request->interview){
        $steps += 1;
    }
    if($request->users->identification && $request->id_photo){
        $steps += 1;
    }
    if($request->latitude && $request->longitude){
        $steps += 1;
    }
    if($request->sign){
        $steps += 1;
    }
    if($request->pet_delivered){
        $steps += 1;
    }
    if($request->finish_date){
        $steps += 1;
    }
@endphp

<style>
    .capital:first-letter {text-transform: uppercase}

</style>

    <div class="grid grid-cols-12  gap-4 mt-2 px-2">
        <div class="col-span-12 md:col-span-5 md:col-start-2">

            <div class="w-full p-4 bg-white shadow-lg rounded-2xl dark:bg-gray-700">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <span class="relative   rounded-xl">
                            <img width="80" height="60" class="rounded-lg" src="{{$request->pets->photo}}" alt="image pet">
                        </span>
                        <div class="flex flex-col">
                            <span class="ml-2 capital font-bold text-black text-md dark:text-white">
                                {{$request->pets->name}}
                            </span>
                            <a href="/pets/{{$request->pets->setHiddenId()}}" target="_blank" class="ml-2 text-sm text-gray-500 dark:text-white">
                                Ver más
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center">
                        @if($request->status != 0 && $request->status != 2)
                            <a href="/requests/{{$hash}}/edit">
                                <button class="text-gray-200">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="flex items-center justify-between mb-4 space-x-12">
                    @if($request->status == 0)
                        <span class="flex items-center px-2 py-1 text-xs font-semibold text-red-700 rounded-md bg-red-50">
                            CANCELADO
                        </span>
                     @elseif($request->status == 2)
                        <span class="flex items-center px-2 py-1 text-xs font-semibold text-green-700 rounded-md bg-green-50">
                            COMPLETADA
                        </span>
                     @else
                        <span class="flex items-center px-2 py-1 text-xs font-semibold text-yellow-700 rounded-md bg-yellow-50">
                            PENDIENTE
                        </span>
                     @endif



                    <span class="flex items-center px-2 py-1 text-xs font-semibold text-green-600 bg-white border border-green-600 rounded-md">
                        Folio {{$request->setHiddenId()}}
                    </span>
                </div>
                @if($request->status != 0)
                <div class="block m-auto">
                    <div>
                        <span class="inline-block text-sm text-gray-500 dark:text-gray-100">
                            Pasos completados:
                            <span class="font-bold text-gray-700 dark:text-white">
                                {{$steps}}
                            </span>
                            /6
                        </span>
                    </div>
                    <div class="w-full h-2 mt-2 bg-gray-200 rounded-full">
                        <div class="w-{{$steps}}/6 h-full text-xs text-center text-white bg-green-400 rounded-full">
                        </div>
                    </div>
                </div>
                @endif

                @if($request->status != 0)
                    @if(!$request->sign && $steps == 3)
                        <div class="w-full my-6 px-4 pb-4 py-8 ml-auto text-gray-500 ">
                            <a href="/requests/{{$request->id}}/sign" type="submit"  class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                Firmar contrato
                            </a>
                        </div>
                    @endif

                    @if(!$request->pet_delivered && $steps == 4)

                        {!! Form::open(['route' => ['request.delivered_pet',["id"=>$hash]]], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}

                            <div class="w-full my-6 px-4 pb-4 ml-auto text-gray-500 ">
                                <button type="submit" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    Se entregó mascota
                                </button>
                            </div>

                        {!! Form::close() !!}


                    @endif

                    @if(!$request->finish_date && $steps == 5)
                        <p class="dark:text-white mt-4">Se recomienda dejar un período mínimo de 15 días para analizar el comportamiento de la mascota en su nuevo hogar. Sin embargo, este tiempo puede variar según tu consideración, e incluso puedes optar por prolongar los dias.</p>
                        <div class="w-full my-6 px-4 pb-4 ml-auto text-gray-500 ">
                            {!! Form::open(['route' => ['request.success',["id" => $hash]]], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}
                                <button type="submit" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                    Finalizar Solicitud
                                </button>
                            {!! Form::close() !!}

                        </div>
                    @endif

                    @if($request->status != 2)
                        {!! Form::open(['route' => ['request.cancel',["id"=>$hash]]], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}
                        <button type="submit" class="py-2 px-4 dark:text-yellow-700 text-red-800 w-full transition ease-in duration-200 text-center text-base font-semibold focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg ">
                            Cancelar Solicitud
                        </button>
                        {!! Form::close() !!}
                    @endif

                    @if($request->finish_date)
                        <span class="mb-20 flex items-center px-2 py-1 mt-4 text-xs font-semibold text-green-500 bg-green-100 rounded-md w-36">
                        Finalizado: <br> {{ date('d/M/y', strtotime($request->finish_date)) }}
                        </span>
                    @endif
                @else
                <h2 class="text-center text-3xl text-red-800 py-16">La solicitud se ha cancelado</h2>
                @endif


            </div>

        </div>
        <div class="col-span-12 md:col-span-5">

            <div class="w-full bg-white shadow-lg rounded-2xl dark:bg-gray-700">
                <p class="p-4 font-bold text-black text-md dark:text-white">
                    Lista de Pasos

                </p>
                <ul>
                    <li class="flex items-center justify-between py-3 text-gray-600 border-b-2 border-gray-100 dark:text-gray-200 dark:border-gray-800">
                        <div class="flex items-center justify-start text-sm">
                            <span class="mx-4">
                                01
                            </span>
                            @if($request->interview)
                                <span class="line-through text-gray-400">
                                    Entrevista
                                </span>
                            @else
                                <span >
                                    Entrevista
                                </span>
                            @endif
                        </div>
                        @if($request->interview)
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="mx-4 text-green-500">
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                </path>
                            </svg>
                            @php
                                 $steps += 1
                            @endphp
                        @else
                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                </path>
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                </path>
                            </svg>
                        @endif
                    </li>
                    <li class="flex items-center justify-between py-3 text-gray-600 border-b-2 border-gray-100 dark:text-gray-200 dark:border-gray-800">
                        <div class="flex items-center justify-start text-sm">
                            <span class="mx-4">
                                02
                            </span>
                            @if($request->users->identification && $request->id_photo)
                                <span class="line-through text-gray-400">
                                    Identidad verificada
                                </span>
                                @php
                                        $steps += 1
                                @endphp
                            @else
                                <span>
                                    Identidad verificada
                                </span>
                            @endif

                        </div>
                        @if($request->users->identification && $request->id_photo)
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="mx-4 text-green-500">
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                </path>
                            </svg>
                        @else
                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                </path>
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                </path>
                            </svg>
                        @endif
                    </li>
                    <li class="flex items-center justify-between py-3 text-gray-600 border-b-2 border-gray-100 dark:text-gray-200 dark:border-gray-800">
                        <div class="flex items-center justify-start text-sm">
                            <span class="mx-4">
                                03
                            </span>

                            @if($request->latitude && $request->longitude )
                                <span class="line-through text-gray-400">
                                    Domicilio
                                </span>
                            @else
                                <span>
                                    Domicilio
                                </span>
                            @endif
                        </div>
                        @if($request->latitude && $request->longitude )
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="mx-4 text-green-500">
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                </path>
                            </svg>
                            @php
                                $steps += 1
                            @endphp

                        @else
                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                </path>
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                </path>
                            </svg>
                        @endif
                    </li>
                    <li class="flex items-center justify-between py-3 text-gray-600 border-b-2 border-gray-100 dark:text-gray-200 dark:border-gray-800">
                        <div class="flex items-center justify-start text-sm">
                            <span class="mx-4">
                                04
                            </span>
                            @if($request->sign)
                                <span class="line-through text-gray-400">
                                    Contrato firmado
                                </span>
                            @else
                                <span>
                                    Contrato firmado
                                </span>
                            @endif

                        </div>
                        @if($request->sign)
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="mx-4 text-green-500">
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                </path>
                            </svg>
                            @php
                                $steps += 1
                            @endphp
                        @else
                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                </path>
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                </path>
                            </svg>
                        @endif


                    </li>
                    <li class="flex items-center justify-between py-3 text-gray-600 border-b-2 border-gray-100 dark:text-gray-200 dark:border-gray-800">
                        <div class="flex items-center justify-start text-sm">
                            <span class="mx-4">
                                05
                            </span>
                            @if($request->finish_date)
                                <span class="line-through text-gray-400">
                                    Mascota entregada
                                </span>
                                @php
                                    $steps += 1
                                @endphp
                            @else
                                <span>
                                    Mascota entregada
                                </span>
                            @endif

                        </div>
                        @if($request->finish_date)
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="mx-4 text-green-500">
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                </path>
                            </svg>
                        @else
                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                </path>
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                </path>
                            </svg>
                        @endif
                    </li>
                    <li class="flex items-center justify-between py-3 border-b-2 border-gray-100 dark:text-gray-200 dark:border-gray-800">
                        <div class="flex items-center justify-start text-sm">
                            <span class="mx-4">
                                06
                            </span>
                            @if($request->finish_date)
                                <span class="line-through text-gray-400">
                                    Mascota adaptada
                                </span>
                                @php
                                    $steps += 1
                                @endphp
                            @else
                                <span>
                                    Mascota adaptada
                                </span>
                            @endif
                        </div>
                        @if($request->finish_date)
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="mx-4 text-green-500">
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                                </path>
                            </svg>
                        @else
                            <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                                <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                                </path>
                                <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                                </path>
                            </svg>
                        @endif
                    </li>

                </ul>
            </div>

        </div>
    </div>

    @if($request->status)
        <div class="grid grid-cols-12 gap-4 mt-2 px-2">
            <div class="col-span-12 md:col-span-10 md:col-start-2">
                <div class="p-4  rounded-lg bg-gray-100/5 ">
                    <div class="max-w-sm mx-auto md:w-full md:mx-0">
                        <div class="inline-flex items-center space-x-4">
                            <a href="#" class="relative block">
                                <img alt="profile" src="{{$request->users->photo}}" class="mx-auto object-cover rounded-full h-16 w-16 "/>
                            </a>
                            <h1 class="dark:text-white font-bold">
                                {{$request->users->name}}
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 bg-white dark:bg-gray-700 ">
                    <div class="w-full p-4 space-y-4 text-gray-500 dark:text-white  md:space-y-0">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 md:col-span-6">

                            <div class="max-w-2xl overflow-hidden shadow-lg sm:rounded-lg">
                                <div class="">
                                    <dl>
                                        <div class="px-4 py-5  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 dark:text-white">
                                                Nombre
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">
                                                {{$request->users->name}}
                                            </dd>
                                        </div>
                                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 dark:text-white">
                                                Número telefonico
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">
                                                {{$request->users->cellphone}}
                                            </dd>
                                        </div>
                                        <div class="px-4 py-5  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 dark:text-white">
                                                Email
                                            </dt>
                                            <dd class="mt-1 capital text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">
                                                {{$request->users->email}}
                                            </dd>
                                        </div>
                                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 dark:text-white">
                                                Identificación
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">
                                                {{ $request->users->identification }}
                                            </dd>
                                        </div>
                                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 dark:text-white">
                                                Género
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">
                                                @if($request->users->gender)
                                                    <span>
                                                        Hombre
                                                    </span>
                                                @else
                                                    <span>
                                                        Mujer
                                                    </span>
                                                @endif
                                            </dd>
                                        </div>
                                        <div class="px-4 py-5  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 dark:text-white">
                                                Nacimiento
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 dark:text-white sm:mt-0 sm:col-span-2">
                                                {{ date('d/M/y', strtotime($request->users->birthday)) }}

                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>

                            </div>
                            <div  class="col-span-12 md:col-span-6">
                                DIRECCIÓN
                                <div id="mapa" style="z-index:0!important;border-radius:1em;min-height:10em; min-width:15em;" class="w-full h-64">

                                </div>
                                <p class="mt-4 uppercase">
                                    {{$request->address}}
                                </p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 gap-5 pt-6">
                            <div class="col-span-12 md:col-span-6">

                                <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-800 p-4">
                                    <div class="grid grid-cols-12">

                                        <div class="col-span-8">
                                            <span class="text-lg font-medium text-gray-600 dark:text-white">
                                                Identificación
                                            </span>

                                        </div>
                                        <div class="col-span-4">
                                            @if($request->id_photo)
                                                <button id="open-btn"  type="button" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                                    Ver
                                                </button>
                                            @else
                                                <h2 class="text-red-900 text-center py-2 font-bold">Sin subir</h2>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-span-12 md:col-span-6">
                                <div class="shadow-lg rounded-2xl bg-white dark:bg-gray-800 p-4">
                                    <div class="grid grid-cols-12">

                                        <div class="col-span-8">
                                            <span class="text-lg font-medium text-gray-600 dark:text-white">
                                                Contrato de adopción
                                            </span>

                                        </div>
                                        <div class="col-span-4">
                                            @if($request->sign)
                                                @if($request->pet_delivered)
                                                <a target="_blank" href="/contract/{{$request->setHiddenId()}}" type="button" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                                    Ver
                                                </a>
                                                @else
                                                <h2 class="text-red-900 text-center py-2 font-bold">Sin entregar mascota</h2>
                                                @endif
                                            @else
                                                <h2 class="text-red-900 text-center py-2 font-bold">Sin Firmar</h2>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="grid grid-cols-12 gap-4 mt-2 px-2">
            <div class="col-span-12 md:col-span-10 md:col-start-2">
                <div class="p-4  rounded-lg bg-gray-100/5 ">
                    <div class="max-w-sm mx-auto md:w-full md:mx-0">
                        <div class="inline-flex items-center space-x-4">
                            <h1 class="dark:text-white font-bold">
                                Entrevista
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 bg-white dark:bg-gray-700 dark:text-white">

            <div class="px-4 py-20 bg-lightblue">
                <div class="flex flex-col max-w-6xl mx-auto md:flex-row">
                    <h2 class="hidden md:block w-full mr-8 text-3xl font-extrabold leading-9 md:w-1/3">
                        Respuestas de la entrevista
                    </h2>
                    @if ($request->interview)
                        <dl class="w-full md:w-2/3">
                            <dt class="mb-4">
                                <h3 class="text-xl font-semibold">
                                    ¿Por qué estás interesado/a en adoptar una mascota?
                                </h3>
                            </dt>
                            <dd class="mb-16">
                                <p class="capital">
                                    {{$request->interview[0]}}
                                </p>
                            </dd>
                            <dt class="mb-4">
                                <h3 class="text-xl font-semibold">
                                    ¿Tienes experiencia previa en el cuidado de mascotas?
                                </h3>
                            </dt>
                            <dd class="mb-16">
                                <p  class="capital">
                                    {{$request->interview[1]}}
                                </p>
                            </dd>
                            <dt class="mb-4">
                                <h3 class="text-xl font-semibold">
                                    ¿Cómo describirías tu estilo de vida y rutina diaria?
                                </h3>
                            </dt>
                            <dd class="mb-16">
                                <p  class="capital">
                                    {{$request->interview[2]}}

                                </p>
                            </dd>

                            <dt class="mb-4">
                                <h3 class="text-xl font-semibold">
                                    ¿Tienes un hogar propio o alquilas? ¿Permite tu hogar tener mascotas?
                                </h3>
                            </dt>
                            <dd class="mb-16">
                                <p  class="capital">
                                    {{$request->interview[3]}}
                                </p>
                            </dd>

                            <dt class="mb-4">
                                <h3 class="text-xl font-semibold">
                                    ¿Cómo planeas proporcionarle atención médica y alimentación a la mascota?
                                </h3>
                            </dt>
                            <dd class="mb-16">
                                <p  class="capital">
                                    {{$request->interview[4]}}
                                </p>
                            </dd>
                        </dl>
                    @else
                        <h2 class="text-center font-bold text-3xl">No hay respuestas</h2>
                    @endif
                </div>
            </div>

                </div>
        </div>
    @endif

    {{-- <div class="w-full bg-white shadow-lg rounded-2xl dark:bg-gray-700">
        <p class="p-4 font-bold text-black text-md dark:text-white">
            My Tasks
            <span class="ml-2 text-sm text-gray-500 dark:text-gray-300 dark:text-white">
                (05)
            </span>
        </p>
        <ul>
            <li class="flex items-center justify-between py-3 text-gray-600 border-b-2 border-gray-100 dark:text-gray-200 dark:border-gray-800">
                <div class="flex items-center justify-start text-sm">
                    <span class="mx-4">
                        01
                    </span>
                    <span>
                        Create wireframe
                    </span>
                </div>
                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                    </path>
                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                    </path>
                </svg>
            </li>
            <li class="flex items-center justify-between py-3 text-gray-600 border-b-2 border-gray-100 dark:text-gray-200 dark:border-gray-800">
                <div class="flex items-center justify-start text-sm">
                    <span class="mx-4">
                        02
                    </span>
                    <span>
                        Dashboard design
                    </span>
                    <span class="flex items-center ml-2 text-gray-400 lg:ml-6 dark:text-gray-300">
                        3
                        <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                            <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                            </path>
                        </svg>
                    </span>
                    <span class="flex items-center mx-4 text-gray-400 dark:text-gray-300">
                        3
                        <svg width="15" height="15" class="ml-1" fill="currentColor" viewBox="0 0 384 512">
                            <path d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8c-.6 16.1-4.2 28.5-11 36.9c-15.4 19.2-49.3 22.4-85.2 25.7c-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3c0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6c3.1-5.2 7.8-9.8 14.9-13.4c16.2-8.2 40.4-10.4 66.1-12.8c42.2-3.9 90-8.4 118.2-43.4c14-17.4 21.1-39.8 21.6-67.9c31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16s16 7.2 16 16s-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16z" fill="currentColor">
                            </path>
                        </svg>
                    </span>
                </div>
                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                    </path>
                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                    </path>
                </svg>
            </li>
            <li class="flex items-center justify-between py-3 text-gray-600 border-b-2 border-gray-100 dark:text-gray-200 dark:border-gray-800">
                <div class="flex items-center justify-start text-sm">
                    <span class="mx-4">
                        03
                    </span>
                    <span>
                        Components card
                    </span>
                    <span class="flex items-center ml-2 text-gray-400 lg:ml-6 dark:text-gray-300">
                        3
                        <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                            <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                            </path>
                        </svg>
                    </span>
                </div>
                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                    </path>
                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                    </path>
                </svg>
            </li>
            <li class="flex items-center justify-between py-3 text-gray-400 border-b-2 border-gray-100 dark:border-gray-800">
                <div class="flex items-center justify-start text-sm">
                    <span class="mx-4">
                        04
                    </span>
                    <span class="line-through">
                        Google logo design
                    </span>
                </div>
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="mx-4 text-green-500">
                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                    </path>
                </svg>
            </li>
            <li class="flex items-center justify-between py-3 text-gray-400 border-b-2 border-gray-100 dark:border-gray-800">
                <div class="flex items-center justify-start text-sm">
                    <span class="mx-4">
                        05
                    </span>
                    <span class="line-through">
                        Header navigation
                    </span>
                </div>
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 1024 1024" class="mx-4 text-green-500">
                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm193.5 301.7l-210.6 292a31.8 31.8 0 0 1-51.7 0L318.5 484.9c-3.8-5.3 0-12.7 6.5-12.7h46.9c10.2 0 19.9 4.9 25.9 13.3l71.2 98.8l157.2-218c6-8.3 15.6-13.3 25.9-13.3H699c6.5 0 10.3 7.4 6.5 12.7z" fill="currentColor">
                    </path>
                </svg>
            </li>
            <li class="flex items-center justify-between py-3 text-gray-600 border-b-2 border-gray-100 dark:text-gray-200 dark:border-gray-800">
                <div class="flex items-center justify-start text-sm">
                    <span class="mx-4">
                        06
                    </span>
                    <span>
                        International
                    </span>
                    <span class="flex items-center ml-2 text-gray-400 lg:ml-6 dark:text-gray-300">
                        3
                        <svg width="15" height="15" fill="currentColor" class="ml-1" viewBox="0 0 512 512">
                            <path d="M256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2l-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29c7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1l-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160s-93.3 160-208 160z" fill="currentColor">
                            </path>
                        </svg>
                    </span>
                    <span class="flex items-center mx-4 text-gray-400 dark:text-gray-300">
                        3
                        <svg width="15" height="15" class="ml-1" fill="currentColor" viewBox="0 0 384 512">
                            <path d="M384 144c0-44.2-35.8-80-80-80s-80 35.8-80 80c0 36.4 24.3 67.1 57.5 76.8c-.6 16.1-4.2 28.5-11 36.9c-15.4 19.2-49.3 22.4-85.2 25.7c-28.2 2.6-57.4 5.4-81.3 16.9v-144c32.5-10.2 56-40.5 56-76.3c0-44.2-35.8-80-80-80S0 35.8 0 80c0 35.8 23.5 66.1 56 76.3v199.3C23.5 365.9 0 396.2 0 432c0 44.2 35.8 80 80 80s80-35.8 80-80c0-34-21.2-63.1-51.2-74.6c3.1-5.2 7.8-9.8 14.9-13.4c16.2-8.2 40.4-10.4 66.1-12.8c42.2-3.9 90-8.4 118.2-43.4c14-17.4 21.1-39.8 21.6-67.9c31.6-10.8 54.4-40.7 54.4-75.9zM80 64c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16zm0 384c-8.8 0-16-7.2-16-16s7.2-16 16-16s16 7.2 16 16s-7.2 16-16 16zm224-320c8.8 0 16 7.2 16 16s-7.2 16-16 16s-16-7.2-16-16s7.2-16 16-16z" fill="currentColor">
                            </path>
                        </svg>
                    </span>
                </div>
                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                    </path>
                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                    </path>
                </svg>
            </li>
            <li class="flex items-center justify-between py-3 text-gray-600 dark:text-gray-200">
                <div class="flex items-center justify-start text-sm">
                    <span class="mx-4">
                        07
                    </span>
                    <span>
                        Production data
                    </span>
                </div>
                <svg width="20" height="20" fill="currentColor" class="mx-4 text-gray-400 dark:text-gray-300" viewBox="0 0 1024 1024">
                    <path d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z" fill="currentColor">
                    </path>
                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372z" fill="currentColor">
                    </path>
                </svg>
            </li>
        </ul>
    </div>
 --}}

    {{-- <body class="dark:bg-gray-900">
        <div class=" min-h-screen flex items-center justify-center px-4 mt-12">
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
                            Estatus
                        </p>
                        <h2 class="font-bold text-2xl">
                            @switch($request->status)
                                @case(0)
                                    <span class="status">Cancelada</span>
                                @break
                                @case(1)
                                    <span class="text-yellow-300">Pendiente</span>
                                @break
                                @case(2)
                                    <span class="status">Exitoso</span>
                                @break
                                @case(3)
                                    <span class="status">Documentacion</span>
                                @break
                                @case(4)
                                    <span class="status">Error Documentacion</span>
                                @break
                                @case(5)
                                    <span class="status">Visita a domicilio</span>
                                @break
                                @case(6)
                                    <span class="status">Mascota entregada</span>
                                @break
                                @case(7)
                                    <span class="status">Mascota adaptada</span>
                                @break
                                @default
                                <span class="status">Cancelada</span>
                        @endswitch
                        </h2>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Mascota en adopción
                        </p>
                        <p class="capital">
                            {{$request->pets->name}} <br>
                            <a target="_blank" class="font-bold text-purple-600" href="/pets/{{$request->pets->id}}">Ver más</a>
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Nombre del solicitante
                        </p>
                        <p>
                            @if($request->users)
                                <img style="max-height: 5em;min-width:5em;" class="w-12 h-12 rounded-full" src="{{$request->users->photo}}" alt="user image">
                                {{$request->users->name}}
                            @endif
                        </p>
                    </div>



                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Correo electrónico
                        </p>
                        <p>
                            {{$request->users?$request->users->email:'Sin correo'}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            CURP
                        </p>
                        <p>
                            {{$request->users?$request->users->identification:'Sin identificación'}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Acerca
                        </p>
                        <p>
                            {{$request->users?$request->users->description:'N/A'}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Domicilio
                        </p>
                        <div id="mapa" style="border-radius:1em;min-height:10em; min-width:15em;" class="w-full h-60">

                        </div>

                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Archivos
                        </p>
                        <div class="space-y-2">
                            @if($request->id_photo)
                                <div>
                                    <img class="mx-auto" src="data:image/jpeg;base64,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" alt="">
                                </div>
                                <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                    <div class="space-x-2 truncate">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inline text-gray-500" width="24" height="24" viewBox="0 0 24 24"><path d="M17 5v12c0 2.757-2.243 5-5 5s-5-2.243-5-5v-12c0-1.654 1.346-3 3-3s3 1.346 3 3v9c0 .551-.449 1-1 1s-1-.449-1-1v-8h-2v8c0 1.657 1.343 3 3 3s3-1.343 3-3v-9c0-2.761-2.239-5-5-5s-5 2.239-5 5v12c0 3.866 3.134 7 7 7s7-3.134 7-7v-12h-2z"/></svg>
                                        <span>
                                            Foto Identificación
                                        </span>
                                    </div>
                                    <a class="text-purple-700 hover:underline">
                                        Ver
                                    </a>
                                    <a class="text-purple-700 hover:underline">
                                        Ocultar
                                    </a>
                                </div>
                            @else
                            <p>Por el momento no tiene registrado la identificación</p>
                            @endif

                            @if($request->sign)
                                <div>
                                    <img class="mx-auto" src="data:image/jpeg;base64,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">
                                </div>
                                <div class="border-2 flex items-center p-2 rounded justify-between space-x-2">
                                    <div class="space-x-2 truncate">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current inline text-gray-500" width="24" height="24" viewBox="0 0 24 24"><path d="M17 5v12c0 2.757-2.243 5-5 5s-5-2.243-5-5v-12c0-1.654 1.346-3 3-3s3 1.346 3 3v9c0 .551-.449 1-1 1s-1-.449-1-1v-8h-2v8c0 1.657 1.343 3 3 3s3-1.343 3-3v-9c0-2.761-2.239-5-5-5s-5 2.239-5 5v12c0 3.866 3.134 7 7 7s7-3.134 7-7v-12h-2z"/></svg>
                                        <span>
                                            Firma
                                        </span>
                                    </div>
                                    <a class="text-purple-700 hover:underline">
                                        Ver
                                    </a>
                                    <a class="text-purple-700 hover:underline">
                                        Ocultar
                                    </a>
                                </div>
                            @else
                            <p>Por el momento no tiene registrado la firma</p>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" min-h-screen flex items-center justify-center px-4">
            <div class="dark:bg-gray-800 dark:text-white max-w-4xl bg-white w-full rounded-lg shadow-xl">
                <div class="p-4 border-b">
                    <h2 class="text-2xl ">
                        Información de la entrevista
                    </h2>
                    <p class="text-sm text-gray-500">
                        Datos personales y solicitud.
                    </p>
                </div>
                <div>




                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Correo electrónico
                        </p>
                        <p>
                            {{$request->users?$request->users->email:'Sin correo'}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            CURP
                        </p>
                        <p>
                            {{$request->users?$request->users->identification:'Sin identificación'}}
                        </p>
                    </div>
                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 p-4 border-b">
                        <p class="text-gray-600 dark:text-white dark:font-bold">
                            Acerca
                        </p>
                        <p>
                            {{$request->users?$request->users->description:'N/A'}}
                        </p>
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


                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Entrevista</h2>

                            </div>
                        </div>

                        <h2 class="text-2xl font-semibold text-green-500 sm:text-xl dark:text-green-300">Completado <span class="text-base font-medium"></span></h2>
                    </div>

                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto rounded-xl dark:border-gray-700">
                        <div class="flex items-center">


                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Domicilio</h2>

                            </div>
                        </div>
                        @if($request->latitude && $request->longitude)
                            <h2 class="text-2xl font-semibold text-green-500 sm:text-xl dark:text-green-300">Completado <span class="text-base font-medium"></span></h2>
                        @else
                         <h2 class="text-2xl font-semibold text-orange-500 sm:text-xl dark:text-orange-300">Pendiente<span class="text-base font-medium"></span></h2>
                        @endif

                    </div>
                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto rounded-xl dark:border-gray-700">
                        <div class="flex items-center">


                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Identidad</h2>
                            </div>
                        </div>
                        @if($request->id_photo)
                            <h2 class="text-2xl font-semibold text-green-500 sm:text-xl dark:text-green-300">Completado <span class="text-base font-medium"></span></h2>
                        @else
                            <h2 class="text-2xl font-semibold text-orange-500 sm:text-xl dark:text-orange-300">Pendiente<span class="text-base font-medium"></span></h2>
                        @endif
                    </div>

                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto rounded-xl dark:border-gray-700">
                        <div class="flex items-center">


                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Contrato firmado</h2>
                            </div>
                        </div>
                        @if($request->sign)
                            <h2 class="text-2xl font-semibold text-green-500 sm:text-xl dark:text-green-300">Completado <span class="text-base font-medium"></span></h2>
                        @else
                            <h2 class="text-2xl font-semibold text-orange-500 sm:text-xl dark:text-orange-300">Pendiente<span class="text-base font-medium"></span></h2>

                        @endif
                    </div>

                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto rounded-xl dark:border-gray-700">
                        <div class="flex items-center">


                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Entrega de mascota</h2>

                            </div>
                        </div>
                        @if($request->status == 6)
                            <h2 class="text-2xl font-semibold text-green-500 sm:text-xl dark:text-green-300">Completado <span class="text-base font-medium"></span></h2>
                        @else
                            <h2 class="text-2xl font-semibold text-orange-500 sm:text-xl dark:text-orange-300">Pendiente<span class="text-base font-medium"></span></h2>

                        @endif
                    </div>

                    <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto rounded-xl dark:border-gray-700">
                        <div class="flex items-center">
                            @if($request->status == 7)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                @endif
                            <div class="flex flex-col items-center mx-5 space-y-1">
                                <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Adaptación de mascota</h2>

                            </div>
                        </div>
                        @if($request->status == 7)
                            <h2 class="text-2xl font-semibold text-green-500 sm:text-xl dark:text-green-300">Completado <span class="text-base font-medium"></span></h2>
                        @else
                            <h2 class="text-2xl font-semibold text-orange-500 sm:text-xl dark:text-orange-300">Pendiente<span class="text-base font-medium"></span></h2>

                        @endif
                    </div>


                </div>
            </div>

        </div>

        <div class="py-12 mt-4 flex items-center justify-center  px-4 ">

            <div class="dark:bg-gray-800 dark:text-white max-w-4xl bg-white w-full rounded-lg shadow-xl">
                <div class="p-4 border-b">
                    <h2 class="text-2xl ">
                        Proceso Final
                    </h2>
                    <p class="text-sm text-gray-500">
                        Datos personales y solicitud.
                    </p>
                </div>
                <div class="p-12">



                    <a target="_blank" href="/generate-pdf" class="my-24 bg-transparent  hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        Generar PDF
                    </a>



                </div>
            </div>

        </div>

    </body> --}}

</x-app-layout>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<script>

    var latitude = {{$request->latitude}};
    var longitude = {{$request->longitude}}

    var map = L.map('mapa').setView([latitude, longitude], 15);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);

    L.marker([latitude,longitude]).addTo(map)
    .bindPopup("{{$request->address}}").openPopup();

</script>

<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script>
    let modal = document.getElementById('modal');
    let btn = document.getElementById('open-btn');
    let button = document.getElementById('ok-btn');
    let cancel = document.getElementById('cancel-btn');

    let modal2 = document.getElementById('modal');

    btn.onclick = function () {
              modal2.style.display = 'block';
          };

          button.onclick = function () {
              modal2.style.display = 'none';
          };

          cancel.onclick = function () {
              modal2 .style.display = 'none';
          };

      window.onclick = function (event) {
      if (event.target == modal) {
      modal.style.display = "none";
      }
      }


</script>
