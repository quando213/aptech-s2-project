<!DOCTYPE html>
<html lang="en">

@include('.Client.layout.head')

<body>
<!-- ::::::  Start Header Section  ::::::  -->
@include('.Client.layout.header')  <!-- :::::: End Header Section ::::::  -->
@yield('contact')

@include('.Client.layout.footer')
@yield('moddal')

@include('.Client.layout.script')
@yield('script')
</body>

</html>

