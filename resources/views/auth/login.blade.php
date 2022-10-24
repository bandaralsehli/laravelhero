 <!-- resources/views/welcome.blade.php -->

 @extends('layouts.app')

 @section('title', 'تسجيل الدخول')

 {{-- @section('sidebar')
    @parent
    <p>This is appended from welcames d</p>
@endsection --}}

 @section('content')

     <div class="container mx-auto px-4 h-5/6">
         <div class="flex content-center items-center justify-center h-full ">
             <div class="w-full lg:w-4/12 px-4">
                 <div
                     class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
                     <div class="rounded-t mb-0 px-6 py-6">
                         <div class="text-center mb-3">
                             <h6 class="text-blueGray-500 text-lg font-bold">
                                 تسجيل الدخول
                             </h6>
                         </div>

                         <hr class="mt-6 border-b-1 border-blueGray-300" />
                     </div>
                     <div class="flex-auto px-4 lg:px-10 py-10 pt-0">

                         <form>
                             <div class="relative w-full mb-3">
                                 <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                     htmlFor="grid-password">
                                     أسم المستخدم
                                 </label>
                                 <input type="string"
                                     class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                     placeholder="أسم المستخدم" />
                             </div>

                             <div class="relative w-full mb-3">
                                 <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                     htmlFor="grid-password">
                                     كلمة السر
                                 </label>
                                 <input type="password"
                                     class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                     placeholder="كلمة السر" />
                             </div>
                             <div>
                                 <label class="inline-flex items-center cursor-pointer">
                                     <input id="customCheckLogin" type="checkbox"
                                         class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150" />
                                     <span class="ml-2 text-sm font-semibold text-blueGray-600">
                                         تذكرني
                                     </span>
                                 </label>
                             </div>

                             <div class="text-center mt-6">
                                 <button onClick={trylogin}
                                     class="bg-blue-700 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                     type="button">
                                     الدخول
                                 </button>
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="flex flex-wrap mt-6 relative">
                     <div class="w-1/2">
                         <a href="#pablo" onClick={trylogin} class="text-blueGray-200">
                             <small>نسيت كلمة السر ؟</small>
                         </a>
                     </div>
                     <div class="w-1/2 text-right">
                         <Link href="/auth/register">
                         <a href="#pablo" class="text-blue-700">
                             <small>التسجيل</small>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection


@section('footer')
<footer class="relative bg-blueGray-200 pt-8 pb-6">

    <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-blueGray-500 font-semibold py-1">Copyright © 2022 <a
                    href="https://www.creative-tim.com/?ref=nnjs-footer&amp;_ga=2.167819617.1599662419.1666561301-1915205988.1664882588"
                    class="text-blueGray-500 hover:text-blueGray-800">Creative by aljorypro</a>.</div>
        </div>
    </div>
</footer>
@endsection
