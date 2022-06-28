


    <!-- mini nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li @if (Request::is('home'))  @endif class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li @if (Request::is('boy/option_register'))  @endif class="nav-item">
                    <a class="nav-link" href="{{route('boy.option')}}
                    {{-- {{ route('register',['type' => 'boy']) }} --}}
                    ">تسجيل البنين</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('girl.create') }}">تسجيل البنات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">بحث</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">اتصل بنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}
                    ">تسجيل دخول</a>
                </li>
            </ul>
        </div>
    </nav>

