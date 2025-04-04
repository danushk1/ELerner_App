<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
  
    @vite('resources/css/app.css')
</head>
<body>

    @include('layouts.navbar')  {{-- Include navbar --}}
    
    <div class="container">
        @yield('content')  {{-- Section for content --}}
    </div>

    @include('layouts.footer')  {{-- Include footer --}}
    
</body>
</html>
