<x-app-layout>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

    {!! Form::open(['route' => ['profile.actualizar',Auth::user()->id],'method' => 'put'], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}

        <div class="py-12 container max-w-screen-lg mx-auto">
            <div>
                <h2 class="font-semibold text-xl dark:text-white text-gray-600 mt-6 ml-4">Edita el perfil de tu refugio</h2>
                <p class="text-gray-500 mb-6 ml-4">* Campos obligatorios</p>

                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Información Basica del negocio</p>
                            <p>Por favor, rellene todos los campos.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name">Nombre del albergue *</label>
                                    <input type="text" placeholder="Ingresa el nombre del albergue" name="name" id="name" required class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth::user()->name}}" />
                                </div>

                                <div class="md:col-span-5" id="imageview">

                                    <img class="mx-auto  w-40  h-40 rounded-full" src="{{Auth::user()->photo}}" alt="image pet">
                                    <p class="text-xl text-blue-800 text-center mt-2" id="changePhoto">Cambiar foto</p>
                                </div>

                                <div class="md:col-span-5" id="uploadimage">

                                    <div class="card-body">
                                        <div id="image_demo" class="mx-auto min-w-64 min-h-64 w-64 h-64 hidden"></div>
                                    </div>

                                    <div class="hidden" id="inputImg">

                                         <label class="dark:text-white" for="image">Imagen *</label>

                                        <input
                                        type="hidden"
                                        name="base"
                                        id="base"/>

                                        {!! Form::file('image',['oninput'=>'magic()','accept'=>'image/apng, image/avif, image/gif, image/jpeg, image/png, image/svg+xml, image/webp','name' => 'image','id'=>'upload_image','class'=>'min-dark:bg-gray-700 dark:text-white h-10 max-dark:bg-gray-700 dark:text-white h-10 dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                                        <p class="text-xl text-red-800 text-center mt-2" id="cancelPhoto">Cancelar</p>
                                    </div>



                                </div>


                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="cellphone">Celular *</label>
                                    <input
                                    type="text"
                                    onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                    id="cellphone"
                                    class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    name="cellphone"
                                    value="{{Auth::user()->cellphone}}"
                                    required
                                    placeholder="Celular"/>
                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name-with-label" >
                                    Descripción
                                    </label> <br>

                                    {!! Form::textarea('description', Auth::user()->description, ["rows"=>"5","cols"=>"20",'id'=>'description','class' => 'border mt-1 dark:bg-gray-700 dark:text-white rounded px-4 w-full bg-gray-50']); !!}

                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name">Cuota de recuperación del albergue (en MXN)*</label>
                                    <input type="number" min="0" max="7500" onkeyup="if(parseInt(this.value)>7500){ this.value =7500; return false; }"  placeholder="Ingresa la cantidad (MXN)" name="recovery_fee" id="recovery_fee" required class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth::user()->recovery_fee}}" />
                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name">Aceptan voluntarios</label>
                                    {!! Form::select('volunteers', array('1' => 'Si', '0' => 'No'), Auth::user()->volunteers,['class' => 'dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50']); !!}
                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name">Link principal (ejemplo: Link de PayPal)</label>
                                    <input type="url" placeholder="Ingresa el link principal" name="main_link" id="main_link"  class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth::user()->main_link}}" />
                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name">Link de lista de deseos (ejemplo: Amazon wishlist) </label>
                                    <input type="url" placeholder="Ingresa el link wishlist" name="wishlist" id="wishlist"  class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth::user()->wishlist}}" />
                                </div>

                                <h2 class="dark:text-white my-4 font-bold">Redes sociales</h2>
                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name">Facebook Link (Ingresa link completa)</label>
                                    <input type="url" placeholder="Ejemplo: https://www.facebook.com/radipetsmx" name="facebook_url" id="facebook_url"  class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$social->facebook}}" />
                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="name">Instagram Link (Ingresa link completa)</label>
                                    <input type="url"  placeholder="Ejemplo: https://www.instagram.com/radipets" name="instagram_url" id="instagram_url"  class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$social->instagram}}" />
                                </div>
                        </div>
                    </div>
                    </div>
                </div>


                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-24md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="dark:text-white text-gray-600">
                        <p class="font-medium text-lg">Ubicación *</p>
                        <p>Indica donde se encuentra tu refugio</p>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">

                            <div id="mapa" class="col-span-12 h-64" style="border-radius:1em;min-height:10em; min-width:15em;" class="mt-4 w-full h-60">

                            </div>

                            <input type="hidden" name="latitude" id="latitude">
                            <input type="hidden" name="longitude" id="longitude">

                        </div>
                        <div class="md:col-span-5 mt-4">
                            <label class="dark:text-white mt-4" for="name">Dirección</label>
                            <input type="text" placeholder="Ingresa dirección" name="address" id="address"  class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth::user()->address}}" />
                        </div>

                    </div>
                    </div>
                </div>

                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3"">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Informacion bancaria</p>
                            <p>Por favor, rellene todos los campos.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-6">
                                <div class="md:col-span-12">
                                <label class="dark:text-white " for="gender">Nombre del banco *</label>
                                <input type="text" placeholder="Ingresa el Nombre del banco" name="bank_name" id="bank_name" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth::user()->bank_name}}" />
                            </div>

                            <div class="md:col-span-12">
                                <label class="dark:text-white " for="sterilized">Cuenta de banco </label>
                                <input type="text" maxlength="20" placeholder="Ingresa la cuenta de banco" name="bank_account" id="bank_account" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth::user()->bank_account}}" />
                            </div>

                            <div class="md:col-span-12">
                                <label class="dark:text-white " for="sterilized">Tarjeta de banco </label>
                                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="text" maxlength="16" placeholder="Ingresa la Tarjeta de banco" name="bank_card" id="bank_card" class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{Auth::user()->bank_card}}" />
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
</x-app-layout>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/gh/BossBele/cropzee@latest/dist/cropzee.js" defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

function magic(){
    $("#image_demo").removeClass('hidden')

    pic.src=window.URL.createObjectURL(this.files[0])
}

    $(document).ready(function(){
        var w = $("#image_demo").width();
        var h = $("#image_demo").height();
        var logo = "{{Auth::user()->photo}}";
        console.log(logo);

        $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
            width: w-10, height: h-20,
            type:'square' //circle
        },
        url: logo,
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


    $("#changePhoto").on('click',function(e){
        $("#inputImg").removeClass('hidden');
        $("#base").addClass('hidden');
        $("#imageview").addClass('hidden');

    });

    $("#cancelPhoto").on('click',function(e){
        $("#base").removeClass('hidden');
        $("#inputImg").addClass('hidden');
        $("#imageview").removeClass('hidden');

        $("#image_demo").addClass('hidden');

    });





</script>


<script>

    var latitude = {{   Auth::user()->latitude?Auth::user()->latitude:1}};
    var longitude = {{  Auth::user()->longitude?Auth::user()->longitude:1 }};

    var map = L.map('mapa').setView([latitude, longitude], 15);

    L.tileLayer('https://mt0.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}&s=Ga', {
    }).addTo(map);

    L.marker([latitude,longitude],{draggable:true}).addTo(map)
    .bindPopup('{{Auth::user()->address}}')
    .on('dragend', function(e) {
      $("#latitude").val(e.target._latlng.lat);
      $("#longitude").val(e.target._latlng.lng);
    }).openPopup();

    bank();

    function bank(breed){

        var url = '';
        url = "{{ asset('json/banks.json')}}"

        var data = [];
        $.getJSON(url,function(result){
            console.log(result);
            $.each(result,function(index,val){
                data.push({label:val.name,id:val.id})
            });
        });

        $("#bank_name").autocomplete({
            source: data,
            select: function(event, ui) {
            var e = ui.item;
            }
        });
}


</script>
