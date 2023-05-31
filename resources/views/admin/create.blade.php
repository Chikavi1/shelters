@if ($message = Session::get('success'))
<div class="bg-green-600 px-4 py-3 text-white">
    <p class="text-center text-sm font-medium">
        {{ $message }}
    </p>
  </div>
@endif


@if($errors->any())
<div class="bg-red-600 px-4 py-3 text-white">
    @foreach ($errors->all() as $error)
        <p class="text-center text-sm font-medium">
            {{ $error }}
        </p>
    @endforeach
  </div>
@endif


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<x-app-layout>
    {!! Form::open(['route' => ['home.store']], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}
        <section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800 mt-20">
            <h1 class="text-xl font-bold text-white capitalize dark:text-white">Account settings</h1>
            <form>
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="text-white dark:text-gray-200" for="username">Nombre del albergue</label>
                        <input id="name" placeholder="Nombre del albergue" required name="name" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="emailAddress">Correo</label>
                        <input id="email" placeholder="correo" required name="email" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="password">Contraseña</label>
                        <input id="password" placeholder="contraseña"  required  name="password" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="username">Nombre del encargado</label>
                        <input id="person_name" placeholder="Nombre del encargado" required name="person_name"  type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="username">Celular</label>
                        <input id="cellphone" placeholder="Celular" name="cellphone"   type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="passwordConfirmation">Necesitas voluntarios</label>
                        <select name="volunteers" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                            <option value="1" >Si</option>
                            <option value="0">No</option>
                        </select>
                    </div>


                    <div>
                        <label class="text-white dark:text-gray-200" for="passwordConfirmation">Descripción</label>
                        <textarea name="description" placeholder="descripción" id="textarea" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                    </div>

                    <div>
                        <label class="text-white dark:text-gray-200" for="username">Cuota de recuperación</label>
                        <input id="cellphone" placeholder="Cuota de recuperación" name="recovery_fee"   type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <div id="map" style="width: 100%;height:20em"></div>
                        <input type="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">
                        <input type="hidden" name="address" id="address">

                    </div>

                </div>

                <div class="flex justify-end mt-6">
                    <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Crear</button>
                </div>
            </form>
        </section>
    {!! Form::close() !!}




    <link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>

    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">


    <script>
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
            // marker dragged
            console.log(e);

            $("#latitude").val(e.target._lngLat.lat);
            $("#longitude").val(e.target._lngLat.lng);

        })
        })
        map.addControl(geocoder)

</script>

</x-app-layout>
