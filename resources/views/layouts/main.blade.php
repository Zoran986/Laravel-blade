<!doctype html>
<html lang="en">
  @include('layouts.head')
  <body>
   
     @include('layouts.navbar')
      
      @yield('content')
     
    @include('layouts.scripts')


    <footer class="bg-light fixed-bottom p-5 text-center">
        <h6>This is footer</h6>
      </footer>

  
  
  </body>
</html>