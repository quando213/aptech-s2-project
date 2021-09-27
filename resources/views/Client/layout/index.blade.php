<!DOCTYPE html>
<html lang="en">

@include('.Client.layout.head')

<body>
<!-- ::::::  Start Header Section  ::::::  -->
@include('.Client.layout.header')  <!-- :::::: End Header Section ::::::  -->
@yield('contact')

@include('.Client.layout.footer')

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>

@include('.Client.layout.modal')

@include('.Client.layout.script')
@yield('script')
</body>

</html>

