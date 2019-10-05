<!DOCTYPE html>
<html lang="es">
<head>
    @include('web.layouts.head')
</head>
<body>

    @include('web.layouts.header')

	@yield('main-content')
    
    @include('web.layouts.footer')

    
    
</body>
</html>