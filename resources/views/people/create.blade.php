@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<x-app-layout>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7789760036582954"
    crossorigin="anonymous"></script>


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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

    {!! Form::open(['route' => ['people.store']], ['class' => 'p-6  flex items-center justify-center' ,'files' => true]) !!}

        <div class="container max-w-screen-lg mx-auto">

            <div>
                <h2 class="font-semibold text-xl dark:text-white text-gray-600 mt-6">Crear usuario</h2>
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
                                    <label class="dark:text-white " for="name">Nombre de la persona *</label>
                                    <input type="text" placeholder="Ingresa el nombre de la persoa" name="name" id="name" required class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"  />
                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="cellphone">Celular *</label>
                                    <input
                                    type="text"
                                    onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                    id="cellphone"
                                    class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    name="cellphone"
                                    required
                                    placeholder="Celular"/>
                                </div>

                                <div class="md:col-span-5">
                                    <label class="dark:text-white" for="email">Correo del adoptante*</label>
                                    <input
                                    type="email"
                                    class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    name="email"
                                    required
                                    placeholder="Correo electronico"/>
                                </div>

                                <div class="md:col-span-5">
                                    <p class="my-4 dark:text-white text-gray-600">Pídele al usuario que introduzca su contraseña en la cual ingresará sesión.</p>
                                    <label class="dark:text-white" for="email">Contraseña del adoptante*</label>
                                    <input
                                    type="password"
                                    class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    name="password"
                                    required
                                    placeholder="Contraseña"/>
                                </div>


                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="birthday">Fecha de nacimiento *</label>
                                    <input
                                    value="2018-07-22"
                                    type="date"
                                    id="birthday"
                                    class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    name="birthday"
                                    required
                                    placeholder="Fecha de nacimiento"/>
                                </div>


                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="cellphone">Identificacion*</label>
                                    <input
                                    type="text"
                                    id="identification"
                                    onkeyup="this.value = this.value.toUpperCase();"
                                    class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50"
                                    name="identification"
                                    required
                                    placeholder="CURP"/>
                                </div>


                                <div class="md:col-span-5">
                                    <label class="dark:text-white " for="sterilized">Género</label>
                                    <select
                                        required
                                        name="gender" id="gender"
                                        class="dark:bg-gray-700 dark:text-white h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                                        <option value="1">
                                            Hombre
                                        </option>
                                        <option value="2">
                                            Mujer
                                        </option>
                                    </select>
                                </div>

                                <div class="md:col-span-5 text-right">
                            <div class="inline-flex items-end">
                                <button id="send" class="bg-blue-500 my-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear</button>
                            </div>
                        </div>



                        </div>
                    </div>
                    </div>
                </div>

                <div class="dark:bg-gray-800 bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="dark:text-white text-gray-600">
                            <p class="font-medium text-lg">Recomienda la app</p>
                            <p>Puedes recomendarle al usuario que descargue la app</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5 py-12">
                                <div class="md:col-span-5">
                                    <img class=" w-52 h-52 mx-auto" src="{{url('img/download-app.jpeg')}}" alt="Image"/>

                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>


        </div>



            {!! Form::close() !!}
</x-app-layout>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdn.jsdelivr.net/gh/BossBele/cropzee@latest/dist/cropzee.js" defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

</script>

<script>
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
