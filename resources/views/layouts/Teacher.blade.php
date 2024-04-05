<!DOCTYPE html>
<html lang="en">
@include('includes.Teacher.head')
<body data-sidebar="dark" data-layout-mode="light">
    <div id="layout-wrapper"> 
    @include('includes.Teacher.header')
    @include('includes.Teacher.sidebar')
    <div class="main-content">
         @yield('content')
         @include('includes.Teacher.footer')
    </div>
    </div>
    @include('includes.Teacher.scripts')
</body>
</html>