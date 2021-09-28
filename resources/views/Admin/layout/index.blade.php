<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin</title>
    @include('Admin.layout.components.head')
    @yield('css')
</head>

<body>
<div id="app">
  @include('Admin.layout.components.menu')
    <div id="main">
       @include('Admin.layout.components.header')

        @yield('content')
        @include('Admin.layout.components.footer')
    </div>
</div>
@include('Admin.layout.components.script')
@yield('script')
</body>

</html>
