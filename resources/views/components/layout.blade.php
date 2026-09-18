<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    {{-- <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
    <script src="{{ asset('asset/js/app.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.js') }}"></script>

    {{-- <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}"> --}}
    {{-- <script src="{{ asset('asset/js/app.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.js') }}"></script> --}}
    
</head>
<body class="bg-gray-50">

        <!-- Sidebar Partial Placement -->
        {{-- @include('partials.sidebar') --}}

        <header class="bg-dark text-white p-3">
            <!-- Global Header Content -->
            Header
        </header>
        <!-- Optional Top Navigation Bar -->
        {{-- <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold text-slate-800">Control Panel</h1>
        </header> --}}
        
        <main class="container my-4">
            @yield('content')
        </main>
</body>
</html>
