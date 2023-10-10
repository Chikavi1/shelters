@extends('layouts.app')

<div class="grid grid-cols-12 gap-4 mx-3">

    <div class="col-span-12 md:col-span-5 md:col-start-2 md:mt-4">

            <article
              class="overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm">
              <img
                alt="Office"
                src="https://www.rfsldspuebla.com/img/Slider49_xl_3.jpg"
                class="h-72 w-full object-cover"
              />


            </article>

    </div>


    <div  class="col-span-12 md:col-span-5">
        <div class="p-4 sm:p-6">
            <h2 class="text-xl md:text-2xl my-4" style="color:orange">Super promoción</h2>
            <a href="#">
              <h3 class="text-lg font-medium text-gray-900">
                YAMAHA MT-07
              </h3>
            </a>

            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                TODOS LOS BOLETOS PAGADOS DE LA YAMAHA MT-07 SIGUEN PARTICIPANDO POR LOS $5,000 PESOS

            </p>

            <h1 class="font-bold text-2xl mt-2 md:text-4xl text-green-600">¡¡Boleto a solo 50 pesos!!</h1>
          </div>
    </div>

</div>

<div>
   <h2 class="text-center my-12 font-bold text-2xl md:text-4xl">Haz clic para seleccionar un número</h2>
</div>
<div class="grid grid-cols-10 ">
    @foreach ([1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1] as $item)
    <div class="col-span-2 md:col-span-1 md:ml-32">
        <div class="w-12 m-1 font-medium py-1 px-2 bg-white rounded-full text-gray-700 bg-gray-100 border border-gray-300 ">
            <div class="text-xs font-normal leading-none  flex-initial">1001</div>
        </div>
    </div>
    @endforeach
</div>


{{-- hidden --}}
<section id="sectionmodal" class="w-screen  h-screen flex items-center justify-center bg-white">
         <div id="modalOverlay" style="display:none;">
              <div id="modal" class="rounded-2xl max-w-xl">
                   <div class="flex py-2 w-full items-center justify-center border-b">
                        <h1 class="pt-4 text-xl text-black font-semibold text-center pb-4">Ingresa tus datos</h1>
                        <button id="close" class="m-4 absolute top-0 right-1 hover:bg-gray-200 rounded-full p-1 focus:outline-none focus:ring-2 focus:ring-offset-0 focus:ring-black" type="button">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                             </svg>
                        </button>
                   </div>
                   <div class="p-12">
                    <div class="bg-white  rounded-lg shadow sm:max-w-md sm:w-full sm:mx-auto sm:overflow-hidden">
                        <div class="px-4 py-8 sm:px-10">

                            <div class="mt-6">
                                <div class="w-full space-y-6">
                                    <div class="w-full">
                                        <div class=" relative ">
                                            <input type="text" id="search-form-price" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Nombre"/>
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class=" relative ">
                                                <input type="text" id="search-form-location" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Whatsapp"/>
                                                </div>
                                            </div>
                                            <div class="w-full">
                                                <div class=" relative ">
                                                    <input type="text" id="search-form-name" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Ciudad"/>
                                                    </div>
                                                </div>
                                                <div>
                                                    <span class="block w-full rounded-md shadow-sm">
                                                        <button type="button" class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                                            Reservar
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-6 border-t-2 border-gray-200  sm:px-10">
                                        <p class="text-xs leading-5 text-gray-500">
                                            Tu información no se comparte con nadie.
                                        </p>
                                    </div>
                                </div>

                   </div>
              </div>
         </div>
</section>


<div class="fixed inset-x-0 bottom-0">
    <div class="bg-indigo-600 px-4 py-3 text-white">
      <p class="text-center text-sm font-medium">
        Pulsa 2 veces para eliminar el boleto
    </p>
    <p class="text-center inline-block">
            <span>
                #1221
            </span>
            <span>
                #1223
            </span>
            <span>
                #1222
            </span>
    </p>
      <button type="button" id="open"  class="text-center mt-2">Continuar</button>
    </div>
  </div>

<style>
    #modalOverlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.4);
  z-index:9999;
}

#modal {
  position: fixed;
  width: 90%;
  top: 55%;
  left: 50%;
  text-align: center;
  background-color: #fafafa;
  box-sizing: border-box;
  opacity: 0;
  transform: translate(-50%,-50%);
  transition: all 300ms ease-in-out;
}

#modalOverlay.modal-open #modal {
  opacity: 1;
  top: 50%;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<script>
    $('#open').click(function() {
  $('#modalOverlay').show().addClass('modal-open');
});

$('#close').click(function() {
  var modal = $('#modalOverlay');
  modal.removeClass('modal-open');
  setTimeout(function() {
    modal.hide();
  },200);
});
</script>

@extends('layouts.footer')
