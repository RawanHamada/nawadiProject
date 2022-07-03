<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Validation - #073 of #100Days100Projects</title>


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body >


    {{-- @yield('nav') --}}

    <div class="cont">
        <div class="header">
            <h2>@yield('header')</h2>
        </div>
        <div class="show">
            @yield('content')
        </div>

    </div>

    <script src="js/script.js"></script>

</body>

</html>
