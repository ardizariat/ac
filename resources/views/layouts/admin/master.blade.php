<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
    {{ $css ?? '' }}
</head>

<body>
    <div id="app">
        <x-app-admin-sidebar></x-app-admin-sidebar>
        <div id="main" class='layout-navbar'>
            <x-app-admin-navbar></x-app-admin-navbar>
            <div id="main-content">

                {{ $slot }}

                <x-app-admin-footer></x-app-admin-footer>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    {{ $js ?? '' }}

</body>

</html>
