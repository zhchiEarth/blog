<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/test.css') }} ">
    {{-- <link rel="stylesheet" type="text/css" href="css/AdminLTE.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script> --}}

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

<div id="app">
    @include('layouts.navbar')

    <main>
        <div class="main main-raised">
            <div class="container">
                    {{ $slot  }}
            </div>
        </div>
    </main>

</div>
    @include('layouts.footer')



<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>