<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('.Shipper.layout.link')
</head>

<body>
<div id="app">
    @include('.Shipper.layout.menu')
    <div id="main">
        @include('.Shipper.layout.header')

        @yield('content')
        @yield('')
        @include('.Shipper.layout.footer')
    </div>
</div>
@include('Shipper.layout.script')
@yield('script')
</body>

</html>
