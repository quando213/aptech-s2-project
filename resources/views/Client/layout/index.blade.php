<!DOCTYPE html>
<html lang="en">

@include('.Client.layout.head')
<body>
@if ( session()->has('login-success') )
    <div class="alert alert-success alert-dismissable">{{ session()->get('login-success') }}</div>
@endif
<!-- ::::::  Start Header Section  ::::::  -->
@include('.Client.layout.header')  <!-- :::::: End Header Section ::::::  -->
@yield('contact')

@include('.Client.layout.footer')
@yield('moddal')

@include('.Client.layout.script')
@yield('script')
</body>
</html>

