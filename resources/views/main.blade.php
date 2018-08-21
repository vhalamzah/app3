<!DOCTYPE html>
     <html lang="{{ app()->getLocale() }}">

         @include('partials._head')
         <body>
          <div id="wrapper">
            <nav  class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
              @include('partials._nav')
            </nav>
            





        
          @yield('content')

          </div>
          @include('partials._footer')
          @include('partials._javascript')
         </body>
         </html>
