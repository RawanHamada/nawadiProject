


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
                <li class="nav-item">
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button class="nav-link" type="submit">تسجيل
                        خروج</button>
                    </form>

                </li>
            </ul>
        </div>
    </nav>

