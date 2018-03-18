<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <nav class="navbar has-shadow">
      <div class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="{{route('home')}}">
            Home
          </a>
          <a class="navbar-item is-tab is-hidden-mobile m-l-10" href="#">
            Images
          </a>
          <a class="navbar-item is-tab is-hidden-mobile" href="#">
            Responses
          </a>
        </div>
        <div class="navbar-end">
          @if(Auth::guest())
            <a class="navbar-item" href="#">Login</a>
          @else
            <a class="navbar-item" href="#">Logout</a>
          @endif
        </div>
      </div>
    </nav>
    @yield('content')

  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
