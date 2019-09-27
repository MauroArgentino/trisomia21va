<!DOCTYPE html>
<html lang="es">
<head>
    @include('web.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    @include('web.layouts.header')

        @yield('main-content')

    @include('web.layouts.footer')
    </div>
</body>
</html>