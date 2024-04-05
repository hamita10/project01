<!DOCTYPE html>
<html lang="en">
@include('includes.Fronted.Head')
<body>
    @include('includes.Fronted.Header')
    @yield('content')
    @include('includes.Fronted.Footer')
    @include('includes.Fronted.scripts')
</body>
</html>