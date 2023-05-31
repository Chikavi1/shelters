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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
    crossorigin="anonymous"></script>

    <style>
        #sig-canvas {
            border: 2px dotted #CCCCCC;
            border-radius: 15px;
            cursor: crosshair;
        }
    </style>


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



    <form enctype='multipart/form-data' action="{{route('requests.store')}}" method="POST" class="min-h-screen p-6 bg-gray-100 dark:bg-gray-900 dark:text-white flex items-center justify-center">
        @csrf
        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl dark:text-white text-gray-600">Crear solicitud de adopción</h2>
                <p class="text-gray-500 mb-6">* Campos obligatorios</p>

                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Usuario</p>
                            <p>Por favor, rellene todos los campos.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">


                                <div class="md:col-span-5">
                                    <label for="email">Correo del adoptante*</label>
                                    <input
                                    type="email"
                                    id="email"
                                    class="h-10 border mt-1 rounded px-4 w-full dark:bg-gray-800 dark:text-white bg-gray-50"
                                    name="email"
                                    required
                                    placeholder="Correo electronico"/>
                                </div>

                                <div id="success" class="hidden">
                                    <img src="" class="mx-auto w-16 rounded-full" id="person_img" alt="image">
                                    <p id="person_name" class="text-center font-bold"></p>
                                </div>

                                <div id="error" class="hidden">
                                    <h2 class="text-center text-red-800 text-2xl">No existe usuario</h2>
                                    <p class="font-bold my-4">Puedes ayudarle a crear una cuenta <a target="_blank" href="/people/create" class="font-bold text-purple-800">aquí</a> </p>
                                </div>

                                <div class="md:col-span-5 mt-4" id="infocreate">
                                    <p class="font-bold">Para disfrutar de todos los beneficios que ofrece la plataforma de Radi Pets Albergues, es necesario que el adoptante este registrado como usuario para dar seguimiento al proceso de adopción. <br><br> El registro es rápido, no toma más de 3 minutos y es totalmente gratuito. ¡No dudes en informar al usuario!</p>
                                    <p class="font-bold my-4">Puedes ayudarle a crear una cuenta <a target="_blank" href="/people/create" class="font-bold text-purple-800">aquí</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Mascota</p>
                            <p>Por favor, rellene todos los campos.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                                <div class="md:col-span-5">
                                    <label for="address">Mascota</label>
                                    <input required type="text" name="pets" id="pets" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"  placeholder="" />
                                    <input required type="hidden" pattern="[0-9]{1,5}" name="pet_id" id="pet_id" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"  placeholder="" />
                                    <p class="font-bold mt-4">Puedes crear una mascota <a target="_blank" class="text-purple-800 font-bold" href="/pets/create">aquí</a> </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div>

                    <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                            <div class="dark:text-white text-gray-600">
                                <p class="font-medium text-lg">Verificación de identidad.</p>
                                <p>Por favor, rellene todos los campos.</p>
                            </div>

                            <div class="lg:col-span-2">
                                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">


                                    <div class="md:col-span-5">

                                        <div class="card-body">
                                            <div id="image_demo" class="hidden mx-auto w-96 h-72"></div>
                                            <div id="uploaded_image" style="width:350px; margin-top:30px;"></div>
                                        </div>

                                        <label class="dark:text-white " for="image">Foto de identificación *</label>

                                        <input
                                        type="hidden"
                                        name="base"
                                        id="base"/>

                                        {!! Form::file('image',['oninput'=>"$('#image_demo').removeClass('hidden')",'accept'=>'image/apng, image/avif, image/gif, image/jpeg, image/png, image/svg+xml, image/webp','name' => 'image','id'=>'upload_image','required'=>"true",
                                            'class'=>'my-4 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400']); !!}
                                        <small>* Por seguridad de la mascota es obligatorio presentar una identificación</small>
                                            <label class="dark:text-white mt-8" for="image">Ingresa identificación</label>

                                            <input
                                            type="text"
                                            class="h-10 border mt-1 rounded px-4 w-full dark:bg-gray-800 dark:text-white bg-gray-50"
                                            name="identification"
                                            id="identification"
                                            onkeyup="this.value = this.value.toUpperCase();"
                                            required
                                            placeholder="CURP"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Entrevista</p>
                            <p>Este apartado puede contestarlo junto con el adoptante.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">


                                <div class="md:col-span-5">
                                    <p>¿Por qué estás interesado/a en adoptar una mascota?</p>

                                    <textarea
                                    class="mt-2 flex-1 w-full px-4 py-2 text-base  placeholder-gray-400 dark:bg-gray-800 dark:text-white bg-gray-50   border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                     placeholder="Ingresa una respuesta"
                                     name="response1"
                                     rows="3"
                                     required
                                     cols="30">{{old('response1')}}</textarea>

                                </div>


                                <div class="md:col-span-5">
                                    <p>¿Tienes experiencia previa en el cuidado de mascotas?</p>
                                    <textarea
                                    class="mt-2 flex-1 w-full px-4 py-2 text-base  placeholder-gray-400 dark:bg-gray-800 dark:text-white bg-gray-50   border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                     placeholder="Ingresa una respuesta"
                                     name="response2"
                                     rows="3"
                                     required
                                     cols="30">{{old('response2')}}</textarea>


                                </div>

                                <div class="md:col-span-5">
                                    <p>¿Cómo describirías tu estilo de vida y rutina diaria?</p>
                                    <textarea
                                    class="mt-2 flex-1 w-full px-4 py-2 text-base  placeholder-gray-400 dark:bg-gray-800 dark:text-white bg-gray-50   border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                     placeholder="Ingresa una respuesta"
                                     name="response3"
                                     rows="3"
                                     required
                                     cols="30">{{old('response3')}}</textarea>



                                </div>

                                <div class="md:col-span-5">
                                    <p>¿Tienes un hogar propio o alquilas? ¿Permite tu hogar tener mascotas?</p>
                                    <textarea
                                    class="mt-2 flex-1 w-full px-4 py-2 text-base  placeholder-gray-400 dark:bg-gray-800 dark:text-white bg-gray-50   border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                     placeholder="Ingresa una respuesta"
                                     name="response4"
                                     rows="3"
                                     required
                                     cols="30">{{old('response4')}}</textarea>


                                </div>

                                <div class="md:col-span-5">
                                    <p>¿Cómo planeas proporcionarle atención médica y alimentación a la mascota? </p>
                                    <textarea
                                    class="mt-2 flex-1 w-full px-4 py-2 text-base  placeholder-gray-400 dark:bg-gray-800 dark:text-white bg-gray-50   border border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                     placeholder="Ingresa una respuesta"
                                     name="response5"
                                     rows="3"
                                     required
                                     cols="30">{{old('response5')}}</textarea>
                                </div>


                        </div>
                    </div>
                    </div>
                </div>
            </div>





            <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-24md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="dark:text-white text-gray-600">
                        <p class="font-medium text-lg">Dirección *</p>
                        <p>Por favor, Ingresa la dirección del adoptante.</p>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                            <div class="md:col-span-5">
                                <div id="map" style="width: 100%;height:20em"></div>

                            </div>

                        <div class="md:col-span-5">
                            <label for="address">Dirección Completa *</label>
                            <input required type="text" name="address" id="address" class=" h-10 border mt-1 rounded px-4 w-full dark:bg-gray-800 dark:text-white bg-gray-50" value="" placeholder="Dirección (calle con número, colonia, CP, ciudad, estado)" />
                        </div>


                        <input type="hidden" id="latitude" class="h-10 border mt-1 rounded px-4 w-full dark:bg-gray-800 dark:text-white bg-gray-50" name="latitude">
                        <input type="hidden" id="longitude" class="h-10 border mt-1 rounded px-4 w-full dark:bg-gray-800 dark:text-white bg-gray-50" name="longitude">


                        <div class="md:col-span-5 text-right">
                            <div class="inline-flex items-end">
                                <button id="send" class="bg-blue-500 my-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Solicitud</button>
                            </div>
                        </div>



                        </div>
                    </div>
                    </div>
                </div>

                </div>
                </div>



            </form>


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
      })
    })
    map.addControl(geocoder);


    $(document).ready(function(){

    var w = $("#image_demo").width();
    var h = $("#image_demo").height();

    $image_crop = $('#image_demo').croppie({
       enableExif: true,
       viewport: {
        width: w-10, height: h-20,
         type:'square' //circle
       },
       boundary:{
        width: w, height: h
       }
     });
     $('#upload_image').on('change', function(){
       var reader = new FileReader();
       reader.onload = function (event) {
         $image_crop.croppie('bind', {
           url: event.target.result
         })
       }

        reader.readAsDataURL(this.files[0]);
            $('#uploadimage').show();
        });

     $('#send').click(function(event){
       $image_crop.croppie('result', {
         type: 'canvas',
         size: 'viewport'
       }).then(function(response){
            $("#base").val(response);
       })
     });

   });


   $("#email").on('blur',function(){

        let url = $("#email").val();
        url = originURL+'/users-org/'+url;

        $.getJSON(url,function(result){
            if(result.length != []){
                $("#success").removeClass("hidden");
                $("#identification").val(result[0].identification);
                $("#person_name").empty().append(result[0].name);
                var preview = document.getElementById("person_img"); //getElementById instead of querySelectorAll
                preview.setAttribute("src", result[0].photo);
                $("#infocreate").addClass("hidden");
                $("#error").addClass("hidden");
            }else{
                $("#identification").val("");
                $("#success").addClass("hidden");
                $("#error").removeClass("hidden");
                $("#infocreate").addClass("hidden");

            }

        });
   })

   var originURL = $(location).attr("origin");
   url = originURL+'/pets-org';
   var data = [];
    $.getJSON(url,function(result){
        $.each(result,function(index,val){
            data.push({label:val.name,id:val.id})
        });
    });


   $("#pets").autocomplete({
        source: data,
        select: function(event, ui) {
        var e = ui.item;
        $("#pet_id").val(e.id);
        }
    });


</script>

    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>


</x-app-layout>
