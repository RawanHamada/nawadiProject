<!-- mini nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li @if (Request::is('home'))  @endif class="nav-item ">
                <a class="nav-link" href="{{ route('home') }}">الرئيسية <span class="sr-only">(current)</span></a>
            </li>
            <li @if (Request::is('admin/girl/boy_info')) class="nav-item active" @endif>
                <a class="nav-link" href="
                    {{-- {{ route('girl.info') }} --}}
                "> المسجلين من الذكور</a>
            </li>
            <li @if (Request::is('admin/girl/first_category'))  @endif class="nav-item active">
                <a class="nav-link"
                    href="
                    {{route('girl.first')}}
                    ">الفئةالاولى
                </a>
            </li>
            <li @if (Request::is('admin/girl/second_category')) class="nav-item active" @endif  >
                <a class="nav-link" href="
                    {{-- {{ route('girl.second') }} --}}
                    "> الفئة الثانية</a>
            </li>
            <li @if (Request::is('admin/girl/third_category')) class="nav-item active" @endif >
                <a class="nav-link" href="
                 {{-- {{ route('girl.third') }} --}}
                ">الفئة الثالثة</a>
            </li>
            <li @if (Request::is('admin/girl/girlforth_category')) class="nav-item active" @endif >
                <a class="nav-link" href="
                    {{-- {{ route('girl.forth') }} --}}

                "> الفئة الرابعة</a>
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
