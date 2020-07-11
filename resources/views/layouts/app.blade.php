<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="Zaki Maliki" />
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  
  {{-- tittle --}}
  <title>@yield('tittle')</title>

  {{-- style --}}
  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')

</head>

<body>
  {{-- Navigation --}}
  @include('includes.navbar')

  {{-- main --}}
  @yield('content')


  {{-- call center --}}
  @include('includes.callcenter')

  {{-- footer --}}
  @include('includes.footer')


  {{-- Script --}}
  @stack('prepend-style')
  @include('includes.script')
  @stack('addon-style')
</body>

</html>