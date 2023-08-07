<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Información de tu perfil
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Mire la información de tu albergue o fundación
        </p>
    </header>


    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <img src="{{$user->cover}}" class="rounded-md bg-gray-300" alt="cover image">
        <img src="{{$user->photo}}" class="w-40 h-40 rounded-full" style="margin-top:-5em;margin-left:1em;" alt="profile image">

       <h2 class="capital dark:text-white font-bold text-2xl">{{$user->name}}</h2>

       <small class="capital dark:text-white">Descripción:</small>
       <p class="capital dark:text-white">{{$user->description}}</p>

        <div class="capital dark:text-white py-4">
            <small>Ayuda:</small>
            @if($user->volunteers)
                <p>Aceptas voluntarios</p>
            @else
                <p>No aceptas voluntarios</p>
            @endif

            @if($user->recovery_fee)
                <p>Cuota de recuperacion de ${{$user->recovery_fee}} pesos</p>
            @else
                <p>Sin cuota de recuperacion</p>
            @endif

            <div class="mt-4">
                <small >Teléfono:</small>
                <p>{{$user->cellphone}}</p> <br>
                <small >Correo:</small>
                <p>{{$user->email}}</p> <br>

                <p>Link principal: </p>

                @if($user->recovery_fee)
                    <a class="font-bold underline" href="{{$user->main_link}}">{{$user->main_link}}</a>
                @else
                    <p class="text-red-600">Sin link principal</p>
                @endif
                <p>Lista de deseos: <br></p>

                @if($user->wishlist)
                    <a class="font-bold underline" href="{{$user->wishlist}}">{{$user->wishlist}}</a>  <br>
                @else
                    <p class="text-red-600">Sin link de wishlist</p>
                @endif
                <p class="mt-4">Facebook:</p>
                @if($social)
                    <p><br> <a target="_blank" class="font-bold underline" href="{{$social->facebook}}">{{$social->facebook}}</a>  </p><br>
                @else
                    <p   class="text-red-600">Sin link de facebook</p>
                @endif
                <p>Instagram:</p>
                @if($social)
                    <p><br> <a  target="_blank" class="font-bold underline" href="{{$social->instagram}}">{{$social->instagram}}</a> </p><br>
                @else
                    <p class="text-red-600">Sin link de instagram</p>
                @endif

            </div>

        </div>

    <div class="relative flex items-start justify-between rounded-xl border border-gray-100 p-4 shadow-xl sm:p-6 lg:p-8" >

        @if($user->bank_name)
        <div class="pt-4 dark:text-white text-gray-500">
            <small>Nombre</small>
            <h3 class="capital mt-4 text-lg font-bold dark:text-white text-gray-900 sm:text-xl">
                <span>{{$user->bank_name}}</span>
            </h3>

            <p>Cuenta de banco:</p>
            <p class="mt-2 text-sm sm:block">
            @if($user->bank_account)
             <span> {{$user->bank_account}}</span>
            @else
                <span>Sin datos</span>
            @endif
            </p>

            <p style="margin-top:1em;">Tarjeta de banco:</p>
            <p class="mt-2 text-sm sm:block">
                @if($user->bank_card)
                    <span>  {{$user->bank_card}} </span>
                @else
                    <span>Sin datos</span>
                @endif
            </p>
        </div>

        <a href="profile/edit" class="rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600">
            Modificar datos
        </a>
        @else
            <h2 class="text-2xl text-red-600">Sin datos bancarios</h2>
            <a href="profile/edit" class="rounded-full bg-green-100 px-3 py-1.5 text-xs font-medium text-green-600">
               Agregar Información
            </a>
        @endif



    </div>

    <div
    class="mt-4 relative block overflow-hidden rounded-lg border border-gray-400 p-4 sm:p-6 lg:p-8"
>
    <span
    class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-purple-800 via-purple-800 to-purple-800"
    ></span>

    <div class="sm:flex sm:justify-between sm:gap-4">
    <div>
        <h3 class="dark:text-white text-lg font-bold text-gray-900 sm:text-xl">
        ¡Comparte tu perfil para llegar a más personas!
        </h3>

        <p class="mt-1 text-xs font-medium text-gray-600">Recomendación</p>
    </div>

    <div class="hidden sm:block sm:shrink-0">
        <img
        alt="Radi Pets"
        src="{{asset('img/default-circle.png')}}"
        class="h-16 w-16 rounded-lg object-cover shadow-sm"
        />
    </div>
    </div>

    <div class="mt-4">
    <p id="p1" class="max-w-[40ch] text-sm text-gray-500" id="text">
        https://www.radi.pet/org/{{Auth::user()->setHiddenId()}}
    </p>
    <button type="button" onclick="copyToClipboard('#p1')" class="mt-2 border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700 text-white font-bold py-2 px-4 rounded-full">
        Copiar
    </button>
    </div>

    <dl class="mt-6 flex gap-4 sm:gap-6">
        <div class="flex flex-col-reverse">
            <dt class="text-sm font-medium text-gray-600">Redes Sociales</dt>


            <div class="sharing-buttons flex flex-wrap">
                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.radi.pet%2Forg%2F{{Auth::user()->setHiddenId()}}" aria-label="Share on Facebook">
                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <title>Facebook</title>
                    <path d="M379 22v75h-44c-36 0-42 17-42 41v54h84l-12 85h-72v217h-88V277h-72v-85h72v-62c0-72 45-112 109-112 31 0 58 3 65 4z">
                    </path>
                </svg>
                </a>
                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.radi.pet%2Forg%2F{{Auth::user()->setHiddenId()}}&amp;text=Descubre%20el%20perfil%20de%20{{Auth::user()->name}}%0A%C2%A1Ay%C3%BAdanos%20a%20mejorar%20la%20vida%20de%20miles%20de%20mascotas!" aria-label="Share on Twitter">
                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <title>Twitter</title>
                    <path d="m459 152 1 13c0 139-106 299-299 299-59 0-115-17-161-47a217 217 0 0 0 156-44c-47-1-85-31-98-72l19 1c10 0 19-1 28-3-48-10-84-52-84-103v-2c14 8 30 13 47 14A105 105 0 0 1 36 67c51 64 129 106 216 110-2-8-2-16-2-24a105 105 0 0 1 181-72c24-4 47-13 67-25-8 24-25 45-46 58 21-3 41-8 60-17-14 21-32 40-53 55z">
                    </path>
                </svg>
                </a>
                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://wa.me/?text=Descubre%20el%20perfil%20de%20{{Auth::user()->name}}%0A%C2%A1Ay%C3%BAdanos%20a%20mejorar%20la%20vida%20de%20miles%20de%20mascotas!%20https%3A%2F%2Fwww.radi.pet%2Forg%2F{{Auth::user()->setHiddenId()}}" aria-label="Share on Whatsapp" draggable="false">
                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <title>Whatsapp</title>
                    <path d="M413 97A222 222 0 0 0 64 365L31 480l118-31a224 224 0 0 0 330-195c0-59-25-115-67-157zM256 439c-33 0-66-9-94-26l-7-4-70 18 19-68-4-7a185 185 0 0 1 287-229c34 36 56 82 55 131 1 102-84 185-186 185zm101-138c-5-3-33-17-38-18-5-2-9-3-12 2l-18 22c-3 4-6 4-12 2-32-17-54-30-75-66-6-10 5-10 16-31 2-4 1-7-1-10l-17-41c-4-10-9-9-12-9h-11c-4 0-9 1-15 7-5 5-19 19-19 46s20 54 23 57c2 4 39 60 94 84 36 15 49 17 67 14 11-2 33-14 37-27s5-24 4-26c-2-2-5-4-11-6z">
                    </path>
                </svg>
                </a>
                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="https://telegram.me/share/url?text=Descubre%20el%20perfil%20de%20{{Auth::user()->name}}%0A%C2%A1Ay%C3%BAdanos%20a%20mejorar%20la%20vida%20de%20miles%20de%20mascotas!&amp;url=https%3A%2F%2Fwww.radi.pet%2Forg%2F{{Auth::user()->setHiddenId()}}" aria-label="Share on Telegram" draggable="false">
                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <title>Telegram</title>
                    <path d="M256 8a248 248 0 1 0 0 496 248 248 0 0 0 0-496zm115 169c-4 39-20 134-28 178-4 19-10 25-17 25-14 2-25-9-39-18l-56-37c-24-17-8-25 6-40 3-4 67-61 68-67l-1-4-5-1q-4 1-105 70-15 10-27 9c-9 0-26-5-38-9-16-5-28-7-27-16q1-7 18-14l145-62c69-29 83-34 92-34 2 0 7 1 10 3l4 7a43 43 0 0 1 0 10z">
                    </path>
                </svg>
                </a>
                <a class="border-2 duration-200 ease inline-flex items-center mb-1 mr-1 transition p-1 rounded-full text-white border-purple-600 bg-purple-600 hover:bg-purple-700 hover:border-purple-700" target="_blank" rel="noopener" href="mailto:?subject=Descubre%20el%20perfil%20de%20{{Auth::user()->name}}%0A%C2%A1Ay%C3%BAdanos%20a%20mejorar%20la%20vida%20de%20miles%20de%20mascotas!&amp;body=https%3A%2F%2Fwww.radi.pet%2Forg%2F{{Auth::user()->setHiddenId()}}" aria-label="Share by Email" draggable="false">
                <svg aria-hidden="true" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4">
                    <title>Email</title>
                    <path d="M464 64a48 48 0 0 1 29 86L275 314c-11 8-27 8-38 0L19 150a48 48 0 0 1 29-86h416zM218 339c22 17 54 17 76 0l218-163v208c0 35-29 64-64 64H64c-35 0-64-29-64-64V176l218 163z">
                    </path>
                </svg>
                </a>
            </div>
        </div>


    </dl>
</div>

    </form>
</section>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script>
      function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($.trim($(element).text())).select();
        console.log($(element).text())
        document.execCommand("copy");
        $temp.remove();
        $("#modalShare").addClass('hidden');
    }
</script>
