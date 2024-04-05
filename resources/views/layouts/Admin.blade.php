<!DOCTYPE html>
<html lang="en">
@include('includes.Admin.head')
<body data-sidebar="dark" data-layout-mode="light">
    <div id="layout-wrapper"> 
    @include('includes.Admin.header')
    @include('includes.Admin.sidebar')
    <div class="main-content">
         @yield('content')
         @include('includes.Admin.footer')
    </div>
    </div>
    @include('includes.Admin.scripts')
</body>
</html>