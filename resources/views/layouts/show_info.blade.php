<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body style="display: block">
    <x-nav-boy-category />
    {{-- <x-sidebar /> --}}
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">
                    @yield('page_header')
                </h4>

                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table">

                            @yield('content')

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{ $boys->links() }}

</body>


</html>
