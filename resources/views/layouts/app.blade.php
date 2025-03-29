<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Matrimony')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @livewireStyles  <!-- Add in head section -->

</head>
<body>

    @include('layouts.header')

    <div class="d-flex wrapper @auth has-sidebar @endauth">
        @auth
            @include('layouts.sidebar')
        @endauth
        <main class="flex-grow-1 main-content">
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    @livewireScripts  <!-- Add in head section -->
</body>
</html>
