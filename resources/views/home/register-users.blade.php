
<link
href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
rel="stylesheet"
/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<section class="bg-white -mb-10">
    <div class="lg:grid -mt-2 lg:min-h-screen lg:grid-cols-12">
      <section
        class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6"
      >
        <img
          alt="Night"
          src="https://images.unsplash.com/photo-1535126320463-c5c1b26b3e66?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
          class="absolute inset-0 h-full w-full object-cover opacity-50"
        />

        <div class="hidden lg:relative lg:block lg:p-12">
          <a class="block text-white" href="/">
            <span class="sr-only">Home</span>
            <img src="../img/logo-white.png" style="width: 3em;height:3em;" alt="">

          </a>

          <h2 class="mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
            Cambia la vida de una mascota
          </h2>

          <p class="mt-4 text-2xl pb-4 text-white ">
            Regístrate como hogar temporal y brinda un refugio temporal a mascotas necesitadas. Tu amor y cuidado pueden salvar vidas. ¡Únete gratis hoy!
          </p>
        </div>
      </section>

      <main
        class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
      >
        <div class="w-full ">
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
            Cambia la vida de una mascota
            </h1>

            <p class="mt-4 leading-relaxed text-gray-500">
                Regístrate como hogar temporal y brinda un refugio temporal a mascotas necesitadas. <br> Tu amor y cuidado pueden salvar vidas. ¡Únete gratis hoy!

            </p>

            <h1 class="font-bold mt-12">Información Personal</h1>

          </div>


            <div id="step1"  class=" w-full  mt-6 grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    <p class="my-2 font-bold ">Paso 1 de 2</p>
                </div>

                <div class="col-span-3">
                  <label
                    for="FirstName"
                    class="block text-sm font-medium text-gray-700"
                  >
                  Nombre Completo
                  </label>

                  <input
                    type="url"
                    required="true"
                    id="FirstName"
                    name="first_name"
                    placeholder="Nombre Completo"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  />
                </div>
                <div class="col-span-3">
                    <label for="Email" class="block text-sm font-medium text-gray-700">
                      Fecha de nacimiento
                    </label>

                    <input
                      type="date"
                      id="Email"
                      required="true"
                      name="email"
                      placeholder="Correo electrónico del usuario de la mascota"
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
                      placeholder="Correo electrónico del usuario de la mascota"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    />
                  </div>

                  <div class="col-span-3">
                    <label for="Email" class="block text-sm font-medium text-gray-700">
                      Contraseña
                    </label>

                    <input
                      type="email"
                      id="Email"
                      required="true"
                      name="email"
                      placeholder="Correo electrónico del usuario de la mascota"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    />
                  </div>



                <div class="col-span-3">
                  <label
                    for="LastName"
                    class="block text-sm font-medium text-gray-700"
                  >
                    Celular
                  </label>

                  <input
                    type="number"
                    id="LastName"
                    required="true"
                    name="last_name"
                    placeholder="Ingresa la cantidad de recompensa"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"                  />
                </div>

                <div class="col-span-3">
                    <label
                      for="LastName"
                      class="block text-sm font-medium text-gray-700"
                    >
                      Tienes mascotas?
                    </label>

                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Selecciona una opción</option>
                        <option value="US">Si</option>
                        <option value="CA">NO</option>
                      </select>
                  </div>

                <div class="col-span-6 mt-6">
                    <label
                      for="LastName"
                      class="block text-sm font-medium text-gray-700"
                    >
                    ¿Cantidad de días que puedes cuidar a una mascota? <br> Se recomiendan minimo 15 dias
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





                <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                  <button
                    type="button"
                    id="next"
                    class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                  >
                    Siguiente paso
                  </button>

                </div>

            </div>

            <div id="step2"  >
                <div class="col-span-6">
                    <p class="my-2 font-bold ">Paso 2 de 2</p>
                </div>
                <h2 class="text-xl font-bold mt-6">Información hogar temporal</h2>
                <div class="mt-6 grid grid-cols-6 gap-6 ">
                    <div class="col-span-6">
                        <label
                        for="PasswordConfirmation"
                        class="block text-sm font-medium text-gray-700"
                        >
                            Ingresa la dirección del hogar temporal
                        </label>


                        <div id="map" style="height:20em"></div>


                    </div>

                    <div class="col-span-2">
                        <label
                          for="LastName"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Selecciona una opción
                        </label>

                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Selecciona una opción</option>
                            <option value="US">Soy Dueño</option>
                            <option value="CA">Rento</option>
                            <option value="CA">Tengo la aprobación del dueño</option>
                            <option value="CA">No cuento con la aprobación del dueño</option>
                        </select>
                      </div>

                      <div class="col-span-2">
                        <label
                          for="LastName"
                          class="block text-sm font-medium text-gray-700"
                        >
                          M<sup>2</sup> del hogar
                        </label>

                        <input
                          type="number"
                          id="LastName"
                          required="true"
                          name="last_name"
                          value="38"
                          min="10"
                          placeholder="Ingresa la cantidad de recompensa"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"                  />
                      </div>

                      <div class="col-span-2">
                        <label
                          for="LastName"
                          class="block text-sm font-medium text-gray-700"
                        >
                        M<sup>2</sup> del jardin
                        </label>

                        <input
                          type="number"
                          id="LastName"
                          required="true"
                          name="last_name"
                          value="0"
                          min="0"
                          placeholder="Ingresa la cantidad de recompensa"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"                  />
                      </div>



                    <div class="col-span-6">

                      <p class="text-sm text-gray-500">
                       Al enviar tu registro, aceptas los
                        <a href="/terms" target="_blank" class="text-gray-700 underline">
                          terminos y condiciones
                        </a>
                        y la
                        <a href="/privacy" target="_blank" class="text-gray-700 underline">politica de privacidad</a>.
                      </p>
                    </div>
                    <div class="col-span-6 sm:flex sm:items-center sm:gap-4 mt-4">
                        <button
                            id="send"
                          type="button"
                          class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                        >
                          Registrarme
                        </button>

                      </div>
                </div>

            </div>
        </div>
      </main>
    </div>
  </section>



{{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" /> --}}
{{-- <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script> --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>


<link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>

<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">


<script>



    $("#step2").addClass('invisible');

    mapboxgl.accessToken = 'pk.eyJ1IjoiY2hpa2F2aSIsImEiOiJja2FrYXJ1MGswbjVoMnFuNnd3OGk5ZWU2In0.xNNeUVGQV2mRad823BhT7w';
    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [ -103.34922976341598, 20.66109048940104],
        zoom: 13
    });

    const geocoder = new MapboxGeocoder({
mapboxgl: mapboxgl,
accessToken: mapboxgl.accessToken,
marker: false
})
geocoder.on('result', e => {

$("#address").val(e.result.place_name);
$("#latitude").val(e.result.center[1]);
$("#longitude").val(e.result.center[0]);

const marker = new mapboxgl.Marker({
draggable: true
})
.setLngLat(e.result.center)
.addTo(map)
marker.on('dragend', e => {
})
})
map.addControl(geocoder);


    $("#next").click(() =>{
        // $("#step2").removeClass('hidden');
        $("#next").addClass('hidden');
        $("#step2").removeClass('invisible');
        const element = document.getElementById("step2");
    element.scrollIntoView({ behavior: "smooth"});

    });

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




var radiIcon = L.icon({
    iconUrl: '{{asset("img/target.png")}}',
    iconSize: [20, 20]
});


    }




    function error(err){

    }

    navigator.geolocation.getCurrentPosition(success, error, options);



  </script>


@include('layouts.footer')
