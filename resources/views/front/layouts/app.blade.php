<!DOCTYPE html>
<html lang="en">
  @include('front.layouts.header')
  <body>
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="position-fixed top-0 start-0 w-100 z-3">
        @include('front.layouts.nav')
      </header>

      <main class="flex-grow-1">
        @yield('content')
      </main>

      @include('front.layouts.footer')
    </div>
  </body>
</html>