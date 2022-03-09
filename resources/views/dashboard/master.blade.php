<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">   
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <title>Administración de pacientes</title>
    
</head>
<body>
    <div class="container">

        @include('dashboard/partials/nav-header-main')

        @include('dashboard/partials/session-flash-status')

        @include('dashboard/partials/validation-errors')

        @yield('content')
    
    </div>

    <script src="{{ asset("js/app.js") }}"></script>
    
</body>

</html>