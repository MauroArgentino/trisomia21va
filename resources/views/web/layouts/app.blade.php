<!DOCTYPE html>
<html lang="es">
<head>
    @include('web.layouts.head')
</head>
<body>
    <div class="content">
    @include('web.layouts.header')

        @yield('main-content')

    @include('web.layouts.footer')
    </div>
</body>
</html>