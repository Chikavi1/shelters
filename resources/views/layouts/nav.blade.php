<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Radi Pets</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link
        href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css"
        rel="stylesheet"
      />
    {!! SEO::generate() !!}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TTX3KKS0FH"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-TTX3KKS0FH');
    </script>

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>


    <header class="  w-full px-2 py-4 bg-white  ">
        <div class="flex items-center justify-between mx-auto max-w-7xl">
          <a href="/" title="Kutty Home Page" class="flex items-center">
           <h1 class="text-xl font-bold">Radi Org</h1>
          </a>
          <div class="hidden items-center space-x-1">
            <div class="hidden space-x-1 md:inline-flex">
              <a href="#" class="btn btn-sm btn-link">Features</a>
              <a href="#" class="btn btn-sm btn-link">Pricing</a>
              <a href="#" class="btn btn-sm btn-link">Blog</a>
              <a href="#" class="btn btn-sm btn-link">Company</a>
              <a href="#" class="btn btn-sm btn-link">Sign in</a>
            </div>
            <a href="#" class="btn btn-sm btn-primary">Get Started</a>
            <div class="inline-flex md:hidden" x-data="{ open: false }">
              <button class="flex-none px-2 btn btn-link btn-sm" @click="open = true">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  aria-hidden="true"
                  class="w-5 h-5"
                >
                  <line x1="3" y1="12" x2="21" y2="12"></line>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
                <span class="sr-only">Open Menu</span>
              </button>
              <div class="absolute top-0 left-0 right-0 z-50 flex flex-col p-2 pb-4 m-2 space-y-3 bg-white rounded shadow" x-show.transition="open" @click.away="open = false" x-cloak>
                <button class="self-end flex-none px-2 ml-2 btn btn-link btn-icon" @click="open = false">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true"
                  >
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                  </svg>
                  <span class="sr-only">Close Menu</span>
                </button>
                <a href="#" class="w-full btn btn-link">Features</a>
                <a href="#" class="w-full btn btn-link">Pricing</a>
                <a href="#" class="w-full btn btn-link">Blog</a>
                <a href="#" class="w-full btn btn-link">Company</a>
                <a href="#" class="w-full btn btn-link">Sign in</a>
              </div>
            </div>
          </div>
        </div>
    </header>
