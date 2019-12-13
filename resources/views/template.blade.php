<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <!--MetaTag-->
  @yield('metatag')

  <title>@yield('title')</title>

  <!-- Fonts -->
  @yield('font')

  <!-- Css -->
  @yield('css')

  <!-- widget -->
  @yield('widget')
</head>

<body>
  @yield('content')
  @yield('javascript')
</body>

<footer>
  @yield('footer')
</footer>

</html>