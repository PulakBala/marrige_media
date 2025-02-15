<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Matrimony')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    @include('layouts.header')

    <div class="d-flex">
        @include('layouts.sidebar')
        <main class="flex-grow-1">
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')

</body>
</html>
