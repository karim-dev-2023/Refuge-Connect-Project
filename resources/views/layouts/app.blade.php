<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ Storage::url('images/favicon.png') }}">
</head>

<body
    style="margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;background:#f4f6f8;color:#0f172a;">
    <div style="min-height:100vh;display:flex;flex-direction:column;">
        @include('partials.header')
        <main>

            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>

</html>
