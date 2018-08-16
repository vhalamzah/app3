<!DOCTYPE html>
     <html lang="{{ app()->getLocale() }}">

         @include('partials._head')
         <body>
          <div id="wrapper">
            @include('partials._nav')





        
          @yield('content')

          </div>
          @include('partials._footer')
          @include('partials._javascript')
         </body>
         </html>
