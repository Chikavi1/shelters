@include('layouts.guest')

<section class="px-4 mx-auto max-w-7xl">

    <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">

        <h1 style="color:#005c7a" class="mt-20 mb-12 text-5xl  leading-none tracking-normal text-gray-900 md:text-7xl md:tracking-tight">
            Registrate como un hogar temporal
      </h1>
      <p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24">
        Utiliza nuestra plataforma y descubre las herramientas que ofrecemos para colaborar en la mejora de la calidad de vida de las mascotas.    </p>
        <a style="background: #005c7a" href="{{ url('/dashboard') }}" class="text-white px-4 py-2 rounded-md font-bold text-2xl inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" >
            Registrarme como hogar
          </a>
          <img class="mt-6 rounded-lg" src="https://images.unsplash.com/photo-1511732351157-1865efcb7b7b?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="casa puente">

      {{-- <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
        @if (Route::has('login'))
            @auth
            @else
            <a href="{{ route('login') }}" class="text-white mt-4 bg-purple-800 px-4 py-2 rounded-md font-bold text-2xl inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" >
                Ingresar
            </a>
            <a href="{{ route('pre-register') }}" class="text-white mt-4 bg-green-800 px-4 py-2 rounded-md font-bold text-2xl inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" >
                Pre Registro
            </a>
            @endauth
        @endif
      </div> --}}
    </div>





    <div class="grid flex-col-reverse  mt-24  grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
        <div class="order-none md:order-2 ">
          <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Consigue beneficios al ser casa puente</h2>
          <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
              Al unirte como voluntario en Casa Puente, puedes disfrutar de descuentos exclusivos en negocios asociados y otros beneficios especiales. ¡Contribuye y recibe recompensas mientras ayudas a quienes lo necesitan!
          </p>
          <a href="/benefits" class="w-full btn btn-dark btn-lg sm:w-auto font-bold text-green-800 text-2xl">Mirar beneficios</a>
        </div>
        <div class="w-full h-72 mb-44 ">
          <img class="rounded-lg" src="https://i.ibb.co/MpGpx3h/Blue-Modern-Debit-Card-Promotion-Facebook-Ad.png" alt="">
        </div>
      </div>

    <div class="grid items-center grid-cols-1 md:grid-cols-2 gap-y-10  -my-48">
      <div>
        <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">Conecta con una organización local</h2>
        <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">

            Únete a una organización local, conviértete en un puente de apoyo o un hogar temporal  y contribuye al bienestar de las fundaciones necesitadas. Tu participación puede marcar la diferencia en la vida de una mascota.       </p>
      </div>
      <div class="w-full h-full py-48">
        <img class="rounded-lg" src="https://images.unsplash.com/photo-1531844251246-9a1bfaae09fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1832&q=80" alt="">
      </div>
    </div>


  </section>

  <div class="px-4   mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
      <div class="flex flex-col justify-center">
        <div class="max-w-xl mb-6">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
              ¿Sabias que?
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
           Puedes ayudar a reducir los costos hasta en 50,000 MXN por año <span class="text-sm">( 2,700 dlls aprox)</span>
          </h2>
          <p class="text-base text-gray-700 md:text-lg">
           Como casa puente, puedes contribuir a que una organización disminuya sus gastos hasta en 50,000 pesos por cada mascota. Ahora, piensa en el impacto que podemos lograr al generar ahorros con varias mascotas.      </p>
        </div>

      </div>
      <div class="relative">
        <svg class="absolute w-full text-teal-accent-400" fill="#005c7a" viewBox="0 0 600 392">
          <rect x="0" y="211" width="75" height="181" rx="8"></rect>
          <rect x="525" y="260" width="75" height="132" rx="8"></rect>
          <rect x="105" y="83" width="75" height="309" rx="8"></rect>
          <rect x="210" y="155" width="75" height="237" rx="8"></rect>
          <rect x="420" y="129" width="75" height="263" rx="8"></rect>
          <rect x="315" y="0" width="75" height="392" rx="8"></rect>
        </svg>
        <svg class="relative w-full text-deep-purple-accent-400" fill="#005c7a" viewBox="0 0 600 392">
          <rect x="0" y="311" width="75" height="81" rx="8"></rect>
          <rect x="525" y="351" width="75" height="41" rx="8"></rect>
          <rect x="105" y="176" width="75" height="216" rx="8"></rect>
          <rect x="210" y="237" width="75" height="155" rx="8"></rect>
          <rect x="420" y="205" width="75" height="187" rx="8"></rect>
          <rect x="315" y="83" width="75" height="309" rx="8"></rect>
        </svg>
      </div>
    </div>
  </div>


  <div style="background:#005c7a" class="px-6 py-6  dark:bg-gray-800 md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
    <div class="xl:w-0 xl:flex-1">
        <h2 class="text-2xl font-extrabold leading-8 tracking-tight text-white sm:text-3xl sm:leading-9">
           Comparte esta plataforma con tus amigos para que más personas se puedan unir a esta causa
        </h2>
        <p class="max-w-3xl mt-3 text-lg leading-6 text-indigo-200">
           Tanto si conoces a alguien que tenga un negocio, una organización o pueda ser casa puente, cada conexión representa un aporte significativo.
        </p>
    </div>
    <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">

    </div>
</div>

  <section class="w-full bg-gradient-to-b from-gray-200 to-white">
    <div class="w-full px-4 py-20 mx-auto text-left md:text-center md:w-3/4 lg:w-2/4">
      <p class="mb-2 text-base  text-green-800">Sé parte del cambio</p>
      <h2 class="mb-6 text-3xl font-extrabold tracking-tight md:text-4xl md:mb-6 md:leading-tight">Cámbiale la vida a una mascota</h2>
      <div class="mb-0 space-x-0 md:space-x-2">
        <a style="background:#005c7a" class="inline-flex text-xl  px-4 py-4 text-white rounded-lg font-bold items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" href="/register-users">
        Quiero ser hogar temporal

        </a>
      </div>
    </div>
  </section>



  <section class="px-4  pb-24 mx-auto max-w-7xl md:px-2">
    <h1 class="mb-6 text-xl font-bold md:text-3xl">Preguntas Frecuentes</h1>
    <div class="text-lg border-t border-b border-gray-200 divide-y divide-gray-200">
      <div x-data="collapse()">
        <button
          x-spread="trigger"
          class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
          role="button"
          aria-controls="faq1"
          aria-expanded="false"
        >
        ¿Qué es una "casa puente"?

        </button>
        <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq1">
            Las casas puente son casas normales donde viven rescatistas o gente que decide apoyar a una mascota que fue rescatado o está en recuperación.
        </div>
      </div>
      <div x-data="collapse()">
        <button
          x-spread="trigger"
          class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
          role="button"
          aria-controls="faq2"
          aria-expanded="false"
        >
        ¿Cómo me registro como casa puente?

        </button>
        <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq2">
            El registro como casa puente es gratuito y fácil. Solo tienes que completar el formulario de registro en nuestra plataforma con la información relevante sobre tu hogar y tus preferencias.
        </div>
      </div>
      <div x-data="collapse()">
        <button
          x-spread="trigger"
          class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
          role="button"
          aria-controls="faq3"
          aria-expanded="false"
        >
            ¿Qué beneficios obtengo al ser una casa puente?

        </button>
        <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq3">
            Al registrarte como casa puente, tienes acceso a descuentos exclusivos y promociones ofrecidos por negocios locales asociados. Además, tienes la oportunidad de contribuir positivamente a tu comunidad.
        </div>
      </div>

      <div x-data="collapse()">
        <button
          x-spread="trigger"
          class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
          role="button"
          aria-controls="faq3"
          aria-expanded="false"
        >
          ¿Quiénes pueden ver mi información como casa puente?

        </button>
        <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq3">
            Solo las organizaciones registradas en nuestra plataforma tienen acceso a la información de las casas puente. Tu privacidad y seguridad son nuestra prioridad.
        </div>
      </div>

      <div x-data="collapse()">
        <button
          x-spread="trigger"
          class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
          role="button"
          aria-controls="faq3"
          aria-expanded="false"
        >
            ¿Cuánto tiempo dura mi registro como casa puente?
        </button>
        <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq3">
            Tu registro como casa puente es válido mientras desees participar. Puedes actualizar o cancelar tu registro en cualquier momento.
        </div>
      </div>

      <div x-data="collapse()">
        <button
          x-spread="trigger"
          class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
          role="button"
          aria-controls="faq3"
          aria-expanded="false"
        >
            ¿Puedo registrarme como organización?

        </button>
        <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq3">
            Sí, si eres una organización interesada en utilizar las casas puente, puedes registrarte en nuestra plataforma de forma gratuita.
        </div>
      </div>

      <div x-data="collapse()">
        <button
          x-spread="trigger"
          class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
          role="button"
          aria-controls="faq3"
          aria-expanded="false"
        >
            ¿Cómo garantizan la seguridad y confidencialidad de la información?
        </button>
        <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq3">
            Nos comprometemos a proteger tu privacidad. Solo las organizaciones registradas pueden acceder a la información de las casas puente, y utilizamos medidas de seguridad para proteger tus datos.
        </div>
      </div>

      <div x-data="collapse()">
        <button
          x-spread="trigger"
          class="flex items-center justify-between w-full py-4 pr-1 font-semibold text-left text-gray-800 outline-none hover:text-primary focus:text-primary focus:outline-none"
          role="button"
          aria-controls="faq3"
          aria-expanded="false"
        >
            ¿Hay algún costo asociado con el uso de la plataforma para las casas puentes o organizaciones?
        </button>
        <div x-spread="collapse" x-cloak class="pb-5 pr-0 text-gray-700 md:pr-40" id="faq3">
            No, el registro en la plataforma es gratuito tanto para las casas puente como para las organizaciones.
        </div>
      </div>

    </div>
  </section>


  @include('layouts.footer')
