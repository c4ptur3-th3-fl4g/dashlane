<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Authentication - Dashlane Clone')</title>
    @vite('resources/css/app.css')
</head>
<body class="h-screen w-screen overflow-hidden">

    {{-- Container chính luôn full màn --}}
    <div class="h-full w-full flex">
        @yield('content')
    </div>

</body>
</html>
