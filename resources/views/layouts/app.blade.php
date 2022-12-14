<!-- resources/views/layouts/app.blade.php -->
<!doctype html dir="ltr">
<html>
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}


  @viteReactRefresh 
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  

  

</head>

   <body class="antialiased">
    <nav
    class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between px-2 py-4 navbar-expand-lg bg-white shadow">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        {{-- <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"><a
                class="text-blueGray-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
                href="#pablo">Notus NextJS</a><button
                class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button"><i class="fas fa-bars"></i></button></div> --}}
        <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
            id="example-navbar-warning">
            <ul class="flex flex-col lg:flex-row list-none mr-auto">
                <li class="flex items-center"><a
                        class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="{{  url('') }}/admin"><i
                            class="text-blueGray-400 far fa-file-alt text-lg leading-lg mr-2"></i> لوحة التحكم </a></li>
            </ul>
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                {{-- <li class="flex items-center"><a
                        class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="#pablo">Demo Pages</a>
                    <div
                        class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48">
                        <span
                            class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">Admin
                            Layout</span><a href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Dashboard</a><a
                            href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Settings</a><a
                            href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Tables</a><a
                            href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Maps</a>
                        <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div><span
                            class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">Auth
                            Layout</span><a href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Login</a><a
                            href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Register</a>
                        <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div><span
                            class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">No
                            Layout</span><a href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Landing</a><a
                            href="#pablo"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Profile</a>
                    </div>
                </li>
                <li class="flex items-center"><a
                        class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-nextjs%2F"
                        target="_blank"><i class="text-blueGray-400 fab fa-facebook text-lg leading-lg "></i><span
                            class="lg:hidden inline-block ml-2">Share</span></a></li>
                <li class="flex items-center"><a
                        class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-nextjs%2F&amp;text=Start%20your%20development%20with%20a%20Free%20Tailwind%20CSS%20and%20NextJS%20UI%20Kit%20and%20Admin.%20Let%20Notus%20NextJS%20amaze%20you%20with%20its%20cool%20features%20and%20build%20tools%20and%20get%20your%20project%20to%20a%20whole%20new%20level."
                        target="_blank"><i class="text-blueGray-400 fab fa-twitter text-lg leading-lg "></i><span
                            class="lg:hidden inline-block ml-2">Tweet</span></a></li>
                <li class="flex items-center"><a
                        class="hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="https://github.com/creativetimofficial/notus-nextjs?ref=nnjs-index-navbar"
                        target="_blank"><i class="text-blueGray-400 fab fa-github text-lg leading-lg "></i><span
                            class="lg:hidden inline-block ml-2">Star</span></a></li> --}}
                <li class="flex items-center"><a
                        class="bg-blue-700 text-white active:bg-blueGray-600 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-lg outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                        href="{{  url('') }}/auth/login" ><i
                            class="fas fa-arrow-alt-circle-down"></i> تسجيل الدخول</a></li>
            </ul>
        </div>
    </div>
</nav>
        {{-- @section('sidebar')
            This is the master sidebar.
        @show --}}

        <div class="container">
            @yield('content')
        </div>

         <div class="container_Footer">
            @yield('footer')
        </div>
    </body>
</html>
