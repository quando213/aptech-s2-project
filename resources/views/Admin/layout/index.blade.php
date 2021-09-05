<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('.Admin.layout.link')
</head>

<body>
<div id="app">
  @include('.Admin.layout.menu')
    <div id="main">
       @include('.Admin.layout.header')
        @yield('content')
        @include('.Admin.layout.footer')
    </div>
</div>
@include('Admin.layout.script')
@yield('script')
</body>

</html>
