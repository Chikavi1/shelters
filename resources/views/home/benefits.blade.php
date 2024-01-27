
<link
href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
rel="stylesheet"
/>

<meta name="viewport" content="width=device-width, initial-scale=1">


<div class="bg-white dark:bg-gray-800 overflow-hidden relative lg:flex lg:items-center">
    <div class="w-full py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
        <p>Conoce los</p>
        <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
            <span class="block">
                Beneficios de ser hogar temporal
            </span>
        </h2>
        <p class="text-xl mt-4 text-gray-400">
            Únete a nuestro equipo de hogares temporales y disfruta de recompensas exclusivas.
            Te brindamos acceso a descuentos especiales en restaurantes, eventos y productos como agradecimiento por tu compromiso. <br>

        </p>
        <div class="lg:mt-0 lg:flex-shrink-0 mb-6">
            <div class="mt-12 inline-flex rounded-md shadow">
                <a href="/register-users" class="py-2 px-4  bg-green-500 hover:bg-green-700 focus:ring-green-500 focus:ring-offset-green-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                   Quiero ser hogar temporal
                </a>
            </div>
        </div>
        <a href="/register-company" class="font-bold text-green-700">¿Tienes un negocio y quieres unirte?</a>
    </div>
    <div class="hidden md:flex items-center gap-8 p-8 lg:p-24">
        <img src="https://images.unsplash.com/photo-1415369629372-26f2fe60c467?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bG92ZSUyMHBldHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" class="w-1/2 rounded-lg" alt="Tree"/>
        <div>
            <img src="https://images.unsplash.com/photo-1541781774459-bb2af2f05b55?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2060&q=80" class="mb-8 rounded-lg" alt="Tree"/>
            <img src="https://i.ibb.co/MpGpx3h/Blue-Modern-Debit-Card-Promotion-Facebook-Ad.png" class="rounded-lg" alt="Tree"/>
        </div>
    </div>
</div>


<div class="grid grid-cols-12 gap-2 md:gap-6 px-4 md:px-12">
    {{-- @foreach([1,1,1,1,1,1,1,1,1] as $company) --}}
    <div class="col-span-12 md:col-span-4">
        <div class="w-full p-4 bg-white shadow-xl hover:bg-gray-100 rounded-2xl dark:bg-gray-700">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <span class="relative p-2 rounded-xl">
                        <svg width="50" height="50"  viewBox="0 0 256 262" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                            <path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#4285F4">
                            </path>
                            <path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#34A853">
                            </path>
                            <path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#FBBC05">
                            </path>
                            <path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#EB4335">
                            </path>
                        </svg>
                    </span>
                    <div class="flex flex-col">
                        <span class="ml-2 font-bold text-black text-md dark:text-white">
                            Radi Pets
                        </span>
                        <a href="https://www.radi.pet" target="_blank" class="font-bold ml-2 text-sm text-blue-500 dark:text-white">
                            Radi Mascotas S.A DE C.V.
                        </a>
                    </div>
                </div>

            </div>
            <div class="flex items-center justify-between mb-4 space-x-12">

                <span class="flex text-green-400 items-center px-2 py-1 text-xs font-semibold bg-white border border-green-400 rounded-md">
                    Destacado
                </span>
            </div>

            <p>Lola Lorem, ipsum dolor ? Eaque autem diandae magnam aspernatur e alias laudantium aperiam non voluptate labore ipsum, corporis magni dolorum placeat cumque doloribus. Doloremque doloribus earum impedit placeat pariatur, quisquam eius quis expedita, delectus esse facere?</p>

            <div class="flex items-center justify-start my-4 space-x-4">
                <span class="flex items-center px-2 py-1 text-xs font-semibold text-green-500 rounded-md bg-green-50">
                    Mascotas
                </span>
                <span class="flex items-center px-2 py-1 text-xs font-semibold text-blue-500 bg-blue-100 rounded-md">
                    Servicios
                </span>
            </div>


        </div>
    </div>

    <div class="col-span-12 md:col-span-4">
        <div class="w-full p-4 bg-white shadow-xl hover:bg-gray-100 rounded-2xl dark:bg-gray-700">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <span class="relative p-2 rounded-xl">
                        <img width="50" height="50" class="rounded-md"   src="http://www.egresados.udg.mx/sites/default/files/styles/thumbnail/public/carls-jr.png?itok=9aSRPTgg" alt="">
                    </span>
                    <div class="flex flex-col">
                        <span class="ml-2 font-bold text-black text-md dark:text-white">
                            Carl's JR
                        </span>
                        <a href="https://www.radi.pet" target="_blank" class="font-bold ml-2 text-sm text-blue-500 dark:text-white">
                            Junior Foods, SA de CV
                        </a>
                    </div>
                </div>

            </div>
            <div class="flex items-center justify-between mb-4 space-x-12">

                <span class="flex text-green-400 items-center px-2 py-1 text-xs font-semibold bg-white border border-green-400 rounded-md">
                    Destacado
                </span>
            </div>

            <p>
                10% de descuento en consumo general
              o aplica con otras promociones. Las sucursales participantes son: CARL'S JR. Cordilleras, CARL'S JR.Sanzio, CARL'S JR. Real Center, CARL'S JR. Urban Center, CARL'S JR.Río Nilo, CARL'S JR. Circunvalación, CARL'S JR. Sao Paulo, CARL'S JR. Oblatos,
              </p>

            <div class="flex items-center justify-start my-4 space-x-4">
                <span class="flex items-center px-2 py-1 text-xs font-semibold text-green-500 rounded-md bg-green-50">
                    Comida
                </span>

            </div>


        </div>
    </div>
    {{-- @endforeach --}}
</div>



