
<link
href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
rel="stylesheet"
/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<meta name="viewport" content="width=device-width, initial-scale=1">


<div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">

    <div class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">

        <div class="relative flex items-center justify-between">
          <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">

            <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Radi ORG</span>
          </a>
          <ul class="flex items-center hidden space-x-8 lg:flex">
            <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Organizaciones</a></li>
            <li><a href="/volunteers" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Casas puentes</a></li>
            {{-- <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Ayudar</a></li> --}}

            <li>
              <a
                href="/"
                class="inline-flex text-purple-700 items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                aria-label="Sign up"
                title="Sign up"
              >
                Apoyar
              </a>
            </li>
          </ul>
          <!-- Mobile menu -->
          <div class="lg:hidden">
            <button aria-label="Open Menu" title="Open Menu" class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50">
             <img src="../" alt="">
            </button>
            <!-- Mobile menu dropdown
            <div class="absolute top-0 left-0 w-full">
              <div class="p-5 bg-white border rounded shadow-sm">
                <div class="flex items-center justify-between mb-4">
                  <div>
                    <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                      <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                        <rect x="3" y="1" width="7" height="12"></rect>
                        <rect x="3" y="17" width="7" height="6"></rect>
                        <rect x="14" y="1" width="7" height="6"></rect>
                        <rect x="14" y="11" width="7" height="12"></rect>
                      </svg>
                      <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                    </a>
                  </div>
                  <div>
                    <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                      <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                        <path
                          fill="currentColor"
                          d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                </div>
                <nav>
                  <ul class="space-y-4">
                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                    <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                    <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                    <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                    <li>
                      <a
                        href="/"
                        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                        aria-label="Sign up"
                        title="Sign up"
                      >
                        Sign up
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            -->
          </div>
        </div>
      </div>
  </div>

  @foreach([1,1,1,1,1,1,1,1,1] as $users)
  <div class="grid grid-cols-12 mt-8 p-4">
    <div class="col-span-12  lg:col-span-8 lg:col-start-3">
      <div class="grid grid-cols-12 bg-white shadow-lg rounded-lg overflow-hidden">

        <div class="col-span-12 h-72 lg:col-span-4 bg-cover" style="background-image: url('https://i.ibb.co/T186RPk/image.png')">

          </div>

        <div class="col-span-12 lg:col-span-8 p-4">
          <h1 class="text-gray-900 font-bold text-2xl">Luis Rojas <i class="fa-solid fa-shield text-green-800"></i></h1>
          <p class="mt-2 text-gray-600 text-sm">
            Soy una persona que ama a las mascotas.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis aspernatur earum ab rerum deleniti quis aperiam voluptatum iusto quo enim. Animi natus soluta ex doloribus nostrum fugiat, mollitia velit consequuntur sapiente blanditiis perspiciatis non delectus aut ad illo sit eius!
        </p>
          <p class="mt-2 text-gray-600 text-xs">San mateo evangelista 4167-1, lomas de san miguel, tlaquepaque, Jalisco.</p>

          <div class="flex item-center mt-2">
            <p>
                <i class="fa-solid fa-car text-green-800 font-bold text-xl" ></i>

            </p>
            <p class="ml-4">
                <i class="fa-solid fa-dog text-green-800 font-bold text-xl"></i>
            </p>
            <p class="ml-4">
                <i class="fa-solid fa-kit-medical text-green-800 font-bold text-xl"></i>
            </p>
          </div>
          <div class="flex item-center justify-between mt-6">
            <p>Dueño</p>
            <p>
                <i class="fa-solid fa-ruler-vertical"></i>
                40 m2
            </p>
            <p>
                <i class="fa-solid fa-tree"></i>
                10 m2
            </p>

            <button class="px-3 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Ver más información</button>
          </div>
        </div>
      </div>
    </div>

</div>
@endforeach

