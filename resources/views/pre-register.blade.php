<link
href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
rel="stylesheet"
/>
{!! SEO::generate() !!}


<script async src="https://www.googletagmanager.com/gtag/js?id=G-TTX3KKS0FH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TTX3KKS0FH');
</script>

<meta name="viewport" content="width=device-width, initial-scale=1">

@if ($message = Session::get('success'))


<section class="grid grid-cols-1 gap-0  bg-opacity-25 md:grid-cols-2">
    <div class="flex flex-col items-start justify-center px-4 py-24 lg:px-20">
      <span class="mb-3 ">Listo!</span>
      <h1 class="mb-6 text-4xl font-bold leading-tight text-blue-900 md:text-4xl lg:text-5xl">Gracias por registrarte</h1>

      <p class="pr-0 mb-4 text-md text-blue-800 tracking-relaxed lg:pr-16">Pronto alguien del equipo de Radi Pets se contactará contigo, si quieres saber más de nosotros te recomendamos a seguirnos en nuestras redes sociales.</p>

      <div class="flex items-center mt-4 space-x-4 sm:mt-0">
        <a target="_blank" href="https://www.instagram.com/radipets/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
            <circle cx="15" cy="15" r="4"></circle>
            <path
              d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
            ></path>
          </svg>
        </a>
        <a  target="_blank" href="https://www.facebook.com/radipetsmx" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
            ></path>
          </svg>
        </a>
      </div>

      <a href="{{ url('/') }}" class="text-white bg-purple-800 px-4 py-2 rounded-md mt-4 font-bold text-xl inline-flex items-center justify-center w-32 mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" >
        Ir al inicio
      </a>
    </div>
    <div class="h-screen">
      <img
        src="https://images.unsplash.com/photo-1525253013412-55c1a69a5738?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
        alt="dogs"
        class="object-cover w-full   bg-gray-100  h-screen"
        loading="lazy"
      />
    </div>
  </section>

@else



<section class="grid grid-cols-1 lg:grid-cols-2">

    <div class="w-full px-4 py-20 mx-auto bg-white xl:py-32 md:w-3/5 lg:w-4/5 xl:w-3/5">
      <h1 class="mb-4 -mt-3 text-2xl font-extrabold leading-snug tracking-tight text-left text-gray-900 md:text-4xl">Solicitud para registro</h1>
      <div class="mt-8 space-y-10">
      </div>
      {!! Form::open(['route' => ['preregister.store']], ['class' => 'grid grid-cols-6 gap-4 mt-12' ,'files' => true]) !!}
      <label class="block">
            <span class="block mb-1 text-xs font-medium text-gray-700">Nombre del encargado</span>
            <input required placeholder="Jose Ramirez"  name="name"  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text">
        </label>
        <label class="block">
            <span class="block mb-1 text-xs font-medium text-gray-700">Nombre del albergue</span>
            <input required placeholder="Refugio patitas"  name="shelter"  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" >
        </label>
        <label class="block">
          <span class="block mb-1 text-xs font-medium text-gray-700">Correo electrónico</span>
          <input required placeholder="ejemplo@albergue.org"   name="email"  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" >
        </label>
        <label class="block">
          <span class="block mb-1 text-xs font-medium text-gray-700">Celular</span>
          <input required  name="cellphone" placeholder="332732329"  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" >
        </label>
        <input type="submit" class="w-full mt-4 btn btn-primary btn-lg py-2" value="Registrar" />
        {!! Form::close() !!}
        <div class="pt-6 mt-6 text-sm font-medium text-gray-700 border-t border-gray-200">
       ¿Tienes alguna duda?
        <a href="https://wa.link/h08snt" class="text-purple-700 hover:text-purple-900">Contáctanos</a>
      </div>
    </div>
    <div class="px-4 py-20 space-y-10 bg-gray-100 xl:py-32 md:px-40 lg:px-20 xl:px-40">

      <a href="/" class="text-bold text-3xl" title="Radi Pets">
        Radi Pets
      </a> <br>
      <small>
        Para albergues
      </small>

      <div class="flex space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-6 h-6 mt-1 text-purple-700">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        <div>
          <h2 class="text-xl font-medium text-purple-700">Cuenta gratis</h2>
          <p class="mt-1 text-gray-700">Queremos apoyarte en tu noble labor, registrarte en Radi Pets es completamente gratis.</p>
        </div>
      </div>
      <div class="flex space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-6 h-6 mt-1 text-purple-700">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        <div>
          <h2 class="text-xl font-medium text-purple-700">Primer plataforma para albergues y refugios</h2>
          <p class="mt-1 text-gray-700">Radi Pets es la primera plataforma desarrollada para las organizaciones.</p>
        </div>
      </div>
      <div class="flex space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-6 h-6 mt-1 text-purple-700">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        <div>
          <h2 class="text-xl font-medium text-purple-700">Perfiles</h2>
          <p class="mt-1 text-gray-700">Crea el perfil de las mascotas en adopción, comparte su perfil para que las personas lo conozcan.</p>
        </div>
      </div>
      <div class="flex space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-none w-6 h-6 mt-1 text-purple-700">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        <div>
          <h2 class="text-xl font-medium text-purple-700">Adopción</h2>
          <p class="mt-1 text-gray-700">Recibe solicitudes de adopción, administrar las solicitudes y dales un seguimiento.</p>
        </div>
      </div>
    </div>
  </section>

  @endif
