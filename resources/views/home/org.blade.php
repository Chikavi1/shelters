@include('layouts.nav')



<div class="mb-16">
    <div class="bg-green-900 text-white">
      <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
          <div>
            <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
              Beta
            </p>
          </div>
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-white sm:text-4xl md:mx-auto">
            <span class="relative inline-block">

              <span class="relative">La</span>
            </span>
            primera plataforma para organizaciones
          </h2>
          <p class="text-base text-white md:text-lg">
            Únete a la vanguardia como una de las primeras organizaciones en formar parte activa de este innovador movimiento.
        </p>
        </div>
        <div class="flex items-center sm:justify-center">
          <a
            href="/login"
            class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-green-800 bg-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Iniciar sesión
        </a>
          <a href="/register" aria-label="" class="inline-flex items-center font-semibold text-white transition-colors duration-200 hover:text-deep-purple-accent-700">Registrarme</a>
        </div>
      </div>
    </div>
    <div class="hidden px-4 sm:px-0">
      <div class="absolute inset-0 bg-green-900 h-1/2"></div>
      <div class="relative grid mx-auto overflow-hidden bg-white divide-y rounded shadow sm:divide-y-0 sm:divide-x sm:max-w-screen-sm sm:grid-cols-3 lg:max-w-screen-md">
        <div class="inline-block p-8 text-center">
          <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
            <i class="text-red-800 text-xl fa-solid fa-heart"></i>
          </div>
          <p class="font-bold tracking-wide text-gray-800">Gratis</p>
        </div>
        <div class="inline-block p-8 text-center">
          <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
            <i class="text-xl fa-solid fa-shield-dog"></i>
          </div>
          <p class="font-bold tracking-wide text-gray-800">Facil de usar</p>
        </div>
        <div class="inline-block p-8 text-center">
          <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
            <i class="text-green-800 text-xl fa-solid fa-lock"></i>
          </div>
          <p class="font-bold tracking-wide text-gray-800">Seguro</p>
        </div>
      </div>
    </div>
  </div>
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
          Nuevo
        </p>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-green-900 sm:text-4xl md:mx-auto">
        Funcionalidades para tu organización
      </h2>
      <p class="text-base text-gray-700 md:text-lg">
        Descubre las diversas funcionalidades que actualmente proporcionamos a las organizaciones y cómo continuamos enriqueciendo constantemente nuestra oferta con nuevas características y herramientas.
    </p>
    </div>
    <div class="grid gap-4 row-gap-5 sm:grid-cols-2 lg:grid-cols-4">
      <div class="flex flex-col justify-between p-5 border rounded shadow-sm">
        <div>
          <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
            <i class="fa-solid fa-newspaper"></i>
          </div>
          <h6 class="mb-2 font-semibold leading-5">Adminstra tu perfil</h6>
          <p class="mb-3 text-sm text-gray-900">

            Optimiza la gestión de tu perfil al incorporar información acerca de tu organización. <br> Personaliza detalles como la aceptación de voluntarios, donde pueden realizar donaciones, tu ubicación para visitas, y más.

          </p>
        </div>
      </div>
      <div class="flex flex-col justify-between p-5 border rounded shadow-sm">
        <div>
          <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
            <i class="fa-solid fa-paw"></i>
          </div>
          <h6 class="mb-2 font-semibold leading-5">Registra mascotas en adopción</h6>
          <p class="mb-3 text-sm text-gray-900">
            Facilita el proceso de encontrar un hogar amoroso para tu mascota registrándola para adopción. <br> Personaliza su perfil con una imagen cautivadora, su nombre, información relevante y comparte su historia para que más personas puedan conocerla          </p>
        </div>
      </div>
      <div class="flex flex-col justify-between p-5 border rounded shadow-sm">
        <div>
          <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
            <i class="fa-solid fa-signature"></i>
          </div>
          <h6 class="mb-2 font-semibold leading-5">Administra solicitudes</h6>
          <p class="mb-3 text-sm text-gray-900">

Moderniza tu proceso de solicitud de adopción trasladándolo al ámbito digital. Da el salto hacia lo digital y disfruta de un seguimiento automatizado para tus adoptantes a través de nuestra plataforma.
          </p>
        </div>
      </div>
      <div class="flex flex-col justify-between p-5 border rounded shadow-sm">
        <div>
          <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50">
            <i class="fa-solid fa-house"></i>
          </div>
          <h6 class="mb-2 font-semibold leading-5">Encuentra casa puente</h6>
          <p class="mb-3 text-sm text-gray-900">
          <span style="font-weight:bold;color:rgb(15, 89, 15)">BETA</span>   <br><br>   Descubre respaldo en nuestra comunidad: <br> conoce a personas dispuestos a ser hogares puente y colaborar contigo en el cuidado temporal de mascotas.
        </p>
        </div>
      </div>
    </div>
  </div>

  <div class="relative flex flex-col-reverse py-16 lg:py-0 lg:flex-col">
    <div class="w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:py-20 lg:max-w-screen-xl">
      <div class="mb-0 lg:max-w-lg lg:pr-8 xl:pr-6">
        <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:text-center">
         Te regalamos un Kit de bienvenida
        </h2>
        <p class="mb-5 text-base text-gray-700 md:text-lg ">
            Al inscribirte en Radi Pets, recibirás de cortesía un kit de bienvenida que incluye placas de identificación.
        </p>
        <div class="mb-10 text-center md:mb-16 lg:mb-20">
          <a
            href="/"
            class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-green-800 transition duration-200 rounded shadow-md md:w-auto bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
          >
            Registrarme
          </a>
        </div>
        <div class="flex flex-col items-center">
          <div class="mb-2 text-sm text-gray-600 md:mb-2">Para más información, siguenos</div>
          <div class="flex items-center space-x-4">
            <div class="flex items-center">

            </div>
            <div class="flex items-center">
              <a target="_blank" href="https://www.instagram.com/radipets/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                  <circle cx="15" cy="15" r="4"></circle>
                  <path
                    d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                  ></path>
                </svg>
              </a>
            </div>
            <div class="flex items-center">
              <a target="_blank" href="https://www.facebook.com/radipetsmx" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">
                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                  <path
                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
                  ></path>
                </svg>
              </a>
            </div>
            <div class="flex items-center">

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="inset-y-0 top-0 right-0 w-full max-w-xl px-4 mx-auto mb-6 md:px-0 lg:pl-8 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-1/2 lg:max-w-full lg:absolute xl:px-0">
      <img
        class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
        src="https://i.ibb.co/NyB0W8Z/tabla-fondo-radi-pets.png"
         alt=""
      />
    </div>
  </div>

  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
      <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">

        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
            Preguntas frecuentes
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
            Conoce las preguntas frecuentes de las organizaciones
        </p>
      </div>
    </div>
    <div class="max-w-screen-xl sm:mx-auto">
      <div class="grid grid-cols-1 gap-16 row-gap-8 lg:grid-cols-2">
        <div class="space-y-8">
          <div>
            <p class="mb-4 text-xl font-medium">
                ¿Cómo puedo registrar mi organización en Radi Pets?
            </p>
            <p class="text-gray-700">
                Para registrar tu organización en Radi Pets de forma gratuita, simplemente ingresa <a href="/register">aquí</a>  y sigue los pasos sencillos de registro. Proporciona la información necesaria sobre tu entidad y ¡listo!
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">
                ¿Existe algún costo asociado con el registro de organizaciones en Radi Pets?
            </p>
            <p class="text-gray-700">
                No, el registro de organizaciones en Radi Pets es completamente gratuito. Queremos facilitar el acceso a nuestra plataforma y brindar apoyo a todas las organizaciones dedicadas al bienestar animal.
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">¿Cómo garantiza Radi Pets la seguridad de la información de mi organización?</p>
            <p class="text-gray-700">
                En Radi Pets, nos tomamos la seguridad en serio. Utilizamos protocolos de seguridad avanzados para proteger la información de tu organización. Nuestro compromiso es mantener la confidencialidad y seguridad de los datos.
            </p>
          </div>
        </div>
        <div class="space-y-8">
          <div>
            <p class="mb-4 text-xl font-medium">. ¿Cómo puedo agregar información relevante sobre mi organización en Radi Pets?</p>
            <p class="text-gray-700">
                Después del registro, puedes personalizar fácilmente tu perfil añadiendo información clave. Incluye detalles como la aceptación de voluntarios, ubicación para donaciones, y cualquier otro dato importante que desees compartir.
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">
                ¿Qué beneficios obtengo al ser parte de la comunidad de Radi Pets?
            </p>
            <p class="text-gray-700">
                Al unirte a Radi Pets, te integras a una comunidad comprometida con el bienestar animal. Puedes encontrar apoyo en forma de hogares puente, compartir experiencias y conocer a otros apasionados por la causa.
            </p>
          </div>
          <div>
            <p class="mb-4 text-xl font-medium">
                ¿Cómo puedo contactar con el soporte técnico de Radi Pets?
            </p>
            <p class="text-gray-700">
                Para cualquier pregunta o problema técnico, puedes ponerte en contacto a través de nuestro portal de ayuda en línea o enviar un correo electrónico a luisrojas@radi.pet
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('layouts.footer')
