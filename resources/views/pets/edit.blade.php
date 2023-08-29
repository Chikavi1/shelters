<x-app-layout>
    @if(Auth::user()->id == $pet->id_organization)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

    {!! Form::open(['route' => ['pets.update',$pet->id],'method' => 'put'], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}

        <div class="container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl dark:text-white text-gray-600 mt-6">Agrega Mascota </h2>
                <p class="text-gray-500 mb-6">* Campos obligatorios</p>

                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Información Basica del negocio</p>
                            <p>Por favor, rellene todos los campos.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name">Nombre de la mascota *</label>
                                    <input type="text" placeholder="Ingresa el nombre de la mascota" name="name" id="name" required class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$pet->name}}" />
                                </div>

                                <div class="md:col-span-5" id="imageview">

                                    <img class="mx-auto rounded-md" src="{{$pet->photo}}" alt="image pet">
                                    <p class="text-xl text-blue-800 text-center mt-2" id="changePhoto">Cambiar foto</p>
                                </div>

                                <div class="md:col-span-5 hidden" id="uploadimage">

                                    <div class="card-body">
                                        <div id="image_demo" class="mx-auto w-96 h-72"></div>
                                        <div id="uploaded_image" style="width:350px; margin-top:30px;"></div>
                                    </div>

                                    <label class="dark:text-white " for="image">Imagen *</label>

                                    <input
                                    type="hidden"
                                    name="base"
                                    id="base"/>

                                    {!! Form::file('image',['oninput'=>'pic.src=window.URL.createObjectURL(this.files[0])','accept'=>'image/apng, image/avif, image/gif, image/jpeg, image/png, image/svg+xml, image/webp','name' => 'image','id'=>'upload_image','class'=>'min-dark:bg-gray-700 dark:text-white h-10 max-dark:bg-gray-700 dark:text-white h-10 dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                                    <p class="text-xl text-red-800 text-center mt-2" id="cancelPhoto">Cancelar</p>


                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="birthday">Fecha de nacimiento *</label>
                                    <input
                                    value="{{ \Carbon\Carbon::createFromDate($pet->birthday)->format('Y-m-d')}}"
                                    type="date"
                                    min="2003-01-01"
                                    id="birthday"
                                    class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    name="birthday"
                                    required
                                    placeholder="Fecha de nacimiento"/>
                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name-with-label" >
                                    Descripción
                                    </label> <br>

                                    {!! Form::textarea('description', $pet->description, ["rows"=>"5","cols"=>"20",'id'=>'description','class' => 'border mt-1 dark:bg-gray-700 dark:text-white rounded px-4 w-full bg-gray-50']); !!}


                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name-with-label" >
                                    Enfermedades cronicas
                                    </label> <br>
                                    {!! Form::textarea('chronic_disease', $pet->chronic_disease, ["rows"=>"5","cols"=>"20",'id'=>'chronic_disease','class' => 'border mt-1 dark:bg-gray-700 dark:text-white rounded px-4 w-full bg-gray-50']); !!}
                                </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-24md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="dark:text-white text-gray-600">
                        <p class="font-medium text-lg">Ubicación *</p>
                        <p>Indica donde se encuentra la mascota</p>
                        <p>(los usuarios que estén cerca podrán ver el perfil de la mascota)</p>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                            <div id="mapa" class="col-span-12 h-64" style="border-radius:1em;min-height:10em; min-width:15em;" class="mt-4 w-full h-60">

                            </div>

                            <input type="hidden" name="latitude" id="latitude">
                            <input type="hidden" name="longitude" id="longitude">

                        </div>
                    </div>
                    </div>
            </div>

                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3"">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Información básica</p>
                            <p>Por favor, rellene todos los campos.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                                <div class="md:col-span-12">
                                <label class="dark:text-white " for="gender">Género *</label>
                                {!! Form::select('gender', array('1' => 'Macho', '2' => 'Hembra'), $pet->gender,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                                </div>


                                <div class="md:col-span-12">
                                    <label class="dark:text-white " for="specie">Especie *</label>
                                    {!! Form::select('specie', array('1' => 'Gato', '2' => 'Perro'), $pet->specie,['id'=>'specie','class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                                </div>
                            <div class="md:col-span-12">
                                <label class="dark:text-white " for="sterelized">Mascota esterilizada?</label>
                                {!! Form::select('sterelized', array('1' => 'Sí',null => 'No'), $pet->sterelized,['id'=>'sterelized','class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                            </div>

                            <div class="md:col-span-12" id="divdatesterelized">
                                <label class="dark:text-white " for="datesterelized">Fecha de esterilizacion</label>
                                <input
                                value="{{ \Carbon\Carbon::createFromDate($pet->sterelized_date)->format('Y-m-d')}}"
                                type="date"

                                id="datesterelized"
                                class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                name="datesterelized"
                                required
                                placeholder="Fecha de nacimiento"/>
                            </div>

                            <div class="md:col-span-12">
                                <label class="dark:text-white " for="payments_card">Raza</label>
                                <input required type="text" name="breeds" id="breeds" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$pet->breed}}" placeholder="" />
                            </div>

                            <input required type="hidden" name="breed" id="breed" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="" />


                            <div class="md:col-span-12"  id="divsize">
                                <label class="dark:text-white " for="size">Tamaño</label>

                                {!! Form::select('size', array('mn' => 'Mini', 'sm' => 'Pequeño','md' => 'Mediano','lg' => 'Grande','xl' => 'Extra Grande'), $pet->size,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                            </div>


                            <div class="md:col-span-12" id="divneclacke">
                                <label class="dark:text-white " for="neclacke_color">Collar color</label>
                                {!! Form::select('color_necklace', array('1' => 'Rojo (precaución)', '2' => 'Amarillo (Nervioso)','3' => 'Verde (Amigable)','4' => 'Naranja (No Amigable)','5' => 'Azul (Entrenado)','6'=> 'Blanco (Discapacidad)'), $pet->color_necklace,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                            </div>

                            <div class="md:col-span-12" id="divweight">
                                <label class="dark:text-white " for="weight">Peso</label>
                                {!! Form::select('weight', array('1' => '1 KG', '2' => '2 KG','3' => '3 KG','4' => '4 KG','5' => '5 KG','6' => '6 KG'), $pet->weight,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                            </div>


                            </div>

                            <div class="md:col-span-5 text-right">
                                <div class="inline-flex items-end">
                                    <button id="send" class="bg-blue-500 my-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}

        @else
            <h2 class="text-center text-3xl dark:text-white my-20">No tienes permisos para editar👀</h2>
        @endif
        </x-app-layout>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/gh/BossBele/cropzee@latest/dist/cropzee.js" defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>


$(document).ready(function(){
    init()
    var w = $("#image_demo").width();
    var h = $("#image_demo").height();

    $image_crop = $('#image_demo').croppie({
       enableExif: true,
       viewport: {
        width: w-10, height: h-20,
         type:'square' //circle
       },
       url: "{{ ($pet->photo)?$pet->photo:'https://radi-images.s3.us-west-1.amazonaws.com/places/casavirreyes.JPG';}}",
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
            console.log(response);
       })
     });

   });


   $("#sterelized").on('change',function(e){
        if(e.target.value == 1){
            $("#divdatesterelized").removeClass('hidden');
        }else{
            $("#divdatesterelized").addClass('hidden');
        }
   });

   $("#changePhoto").on('click',function(e){
    $("#uploadimage").removeClass('hidden');
    $("#imageview").addClass('hidden');
   });

   $("#cancelPhoto").on('click',function(e){
    $("#imageview").removeClass('hidden');
    $("#uploadimage").addClass('hidden');

   });


if({{$pet->specie}} == 1){
    runCat();
}else{
    runDog();
}

function runCat(){
    $("#divneclacke").addClass('hidden');
    $("#divsize").addClass('hidden');
    $("#divweight").removeClass('hidden');
    breeds('cat');
}

function runDog(){
    $("#divneclacke").removeClass('hidden');
    $("#divsize").removeClass('hidden');
    $("#divweight").addClass('hidden');
    breeds('dog');
}

    $("#specie").on('change',function(e){
        $("#breeds").val('');
        if(e.target.value == 1){
            runCat();

        }else{
            runDog();

        }
   });

   function init(){
        // $("#divneclacke").addClass('hidden');
        // $("#divsize").addClass('hidden');
        $("#divweight").addClass('hidden');

        if({{$pet->specie}} == 1){
            breeds('cat');
        }else{
            breeds('dog');
        }
   }
  function breeds(breed){

    var url = '';
    if(breed == 'cat'){
        url = "{{ asset('json/cats.json')}}"
    }else{
        url = "{{ asset('json/dogs.json')}}"
    }
    var data = [];
    $.getJSON(url,function(result){

        @if($pet->breed)
            $("#breeds").val(result[{{$pet->breed}}-1].name);
        @endif


        $.each(result,function(index,val){
            data.push({label:val.name,id:val.id})
        });
    });
    $("#breeds").autocomplete({
        source: data,
        select: function(event, ui) {
        var e = ui.item;
        $("#breed").val(e.id);

        // var result = "<p>label : " + e.label + " - id : " + e.id + "</p>";
        // console.log(result);
        }
    });
  }

</script>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<script>

    var latitude = {{   $pet->latitude?$pet->latitude:Auth::user()->latitude }};
    var longitude = {{  $pet->longitude?$pet->longitude:Auth::user()->longitude }};

    var map = L.map('mapa').setView([latitude, longitude], 15);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);

    L.marker([latitude,longitude],{draggable:true}).addTo(map)
    .bindPopup('Aquí se encuentra')
    .on('dragend', function(e) {
      $("#latitude").val(e.target._latlng.lat);
      $("#longitude").val(e.target._latlng.lng);
    }).openPopup();

</script>
