<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin Chợ Hộ Hà Nội</title>
    @include('Admin.layout.components.head')
    @yield('css')
</head>

<body>
@yield('main')
@include('Admin.layout.components.script')
@yield('script')
</body>

</html>
