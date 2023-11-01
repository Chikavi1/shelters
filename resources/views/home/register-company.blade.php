

<link
href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
rel="stylesheet"
/>

<meta name="viewport" content="width=device-width, initial-scale=1">

<section class="bg-white md:-mb-10">
    <div class="lg:grid -mt-2 lg:min-h-screen lg:grid-cols-12">
      <section
        class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6"
      >
        <img
          alt="Night"
          src="https://images.unsplash.com/photo-1583160201565-7294e0e44cf0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
          class="absolute inset-0 h-full w-full object-cover opacity-80"
        />

        <div class="hidden lg:relative lg:block lg:p-12">
          <a class="block text-white" href="/">
            <span class="sr-only">Home</span>
            <img src="../img/logo-white.png" style="width: 3em;height:3em;" alt="">

          </a>

          <h2 class="mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
            Sé una empresa que genera un cambio
          </h2>

          <p class="mt-4 leading-relaxed text-white">

            ¡Únete a nuestra iniciativa!
            Registra tu empresa y ofrece descuentos especiales para apoyar a los voluntarios que salvan a las mascotas. Juntos, podemos marcar la diferencia y cuidar de nuestros fieles amigos.
            ¡Hagamos la diferencia hoy!
        </p>
        </div>
      </section>

      <main
        class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
      >
        <div class="max-w-xl lg:max-w-3xl">
          <div class="relative -mt-16 block lg:hidden">
            <a
              class="inline-flex h-16 w-16 items-center justify-center rounded-full bg-white text-blue-600 sm:h-20 sm:w-20"
              href="/"
            >
              <span class="sr-only">Home</span>
              <img src="../img/logo-blue.png" alt="">
            </a>

            <h1
              class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl"
            >
            Sé una empresa que genera un cambio
            </h1>

            <p class="mt-4 leading-relaxed text-gray-500">
                ¡Únete a nuestra iniciativa!
                Registra tu empresa y ofrece descuentos especiales para apoyar a los voluntarios que salvan a las mascotas. Juntos, podemos marcar la diferencia y cuidar de nuestros fieles amigos.
                ¡Hagamos la diferencia hoy!
            </p>
          </div>

          <form action="#" class="md:-mt-16 mt-6 grid grid-cols-6 gap-6">
            <div class="col-span-3 sm:col-span-3 mt-20">
              <label
                for="name"
                class="block text-sm font-medium text-gray-700"
              >
                Nombre del negocio
              </label>

              <input
                required="true"
                id="name"
                name="name"
                placeholder="Ejemplo: Radi Pets"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              />
            </div>
            <div class="col-span-3 sm:col-span-3 mt-20">
                <label
                  for="name"
                  class="block text-sm font-medium text-gray-700"
                >
                  Razon social del negocio
                </label>

                <input
                  required="true"
                  id="name"
                  name="name"
                  placeholder="Ejemplo: Radi Mascotas S.A DE C.V."
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </div>

            <div class="col-span-3">
                <label for="Email" class="block text-sm font-medium text-gray-700">
                  Correo electrónico
                </label>

                <input
                  type="email"
                  id="Email"
                  required="true"
                  name="email"
                  placeholder="Correo electrónico para contactarlo"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </div>
              <div class="col-span-3">
                <label for="Email" class="block text-sm font-medium text-gray-700">
                  Celular
                </label>

                <input
                  type="phone"
                  id="phone"
                  required="true"
                  name="phone"
                  placeholder="Celular"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </div>

              <div class="col-span-3">
                <label for="Email" class="block text-sm font-medium text-gray-700">
                  Página web
                </label>

                <input
                  type="url"
                  id="phone"
                  required="true"
                  name="url"
                  placeholder="Ejemplo: https://www.radi.pet"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label
                  for="LastName"
                  class="block text-sm font-medium text-gray-700"
                >
                  Categoria
                </label>

                <input
                  type="number"
                  id="LastName"
                  required="true"
                  name="last_name"
                  placeholder="Ingresa la cantidad de recompensa"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
            </div>


              <div class="col-span-6">
                <label for="Email" class="block text-sm font-medium text-gray-700">
                  Dirección
                </label>

                <input
                  type="phone"
                  id="phone"
                  required="true"
                  name="phone"
                  placeholder="Ejemplo Av. Lopez mateos 1002, colonia"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
              </div>




            <div class="col-span-6 "
            >
              <label
                for="Password"

                class="block text-sm font-medium text-gray-700"
              >
                Descripción de la oferta
              </label>

              <textarea
              required="true"
              rows="5"

              placeholder=" Ingresa la oferta,descuento o promoción que quisieras dar "
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              ></textarea>

            </div>


            <div class="col-span-6 sm:col-span-3">
                <label
                  for="LastName"
                  class="block text-sm font-medium text-gray-700"
                >
                  Logo
                </label>

                <input
                  type="number"
                  id="LastName"
                  required="true"
                  name="last_name"
                  placeholder="Ingresa la cantidad de recompensa"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
            </div>





            <div class="col-span-6">
              <p class="text-sm text-gray-500">
               Al enviar tu solicitud, aceptas los
                <a href="/terms" target="_blank" class="text-gray-700 underline">
                  terminos y condiciones
                </a>
                y la
                <a href="/privacy" target="_blank" class="text-gray-700 underline">politica de privacidad</a>.
              </p>
            </div>

            <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
              <button
                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
              >
                Enviar Solicitud
              </button>

              {{-- <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                Tienes alguna duda?
                <a href="#" class="text-gray-700 underline">Aquí</a>.
              </p> --}}
            </div>
          </form>
        </div>
      </main>
    </div>
  </section>



<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>



  <script>

    var latitude;
    var longitude;

    const options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0
    };


    function success(pos) {
        const crd = pos.coords;
        console.log(crd);
        latitude  = crd.latitude;
        longitude = crd.longitude;
        $("#latitude").val(latitude);
        $("#longitude").val(longitude);

        var map = L.map('mapa').setView([latitude, longitude], 16);

L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
}).addTo(map);


var radiIcon = L.icon({
    iconUrl: '{{asset("img/target.png")}}',
    iconSize: [20, 20]
});

L.marker([latitude,longitude], {icon: radiIcon,draggable:true}).addTo(map)
.bindPopup('Aquí se perdió') .on('dragend', function(e) {
  $("#latitude").val(e.target._latlng.lat);
  $("#longitude").val(e.target._latlng.lng);
}).openPopup();

    }




    function error(err){

    }

    navigator.geolocation.getCurrentPosition(success, error, options);



  </script>


@include('layouts.footer')
