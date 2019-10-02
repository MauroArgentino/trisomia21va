<!DOCTYPE html>
<html lang="es">
<head>
    @include('web.layouts.head')
</head>
<body>

    @include('web.layouts.header')

	<div class="container">

        @yield('main-content')

    	@include('web.layouts.footer')
    </div>
    
</body>
</html>