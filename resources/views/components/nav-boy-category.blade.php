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
            <li @if (Request::is('admin/boy/boy_info')) class="nav-item active" @endif>
                <a class="nav-link" href="
                    {{ route('boy.info') }}
                "> المسجلين من الذكور</a>
            </li>
            <li @if (Request::is('admin/boy/first_category'))  @endif class="nav-item active">
                <a class="nav-link"
                    href="
                    {{route('boy.first')}}
                    ">الفئةالاولى
                </a>
            </li>
            <li @if (Request::is('admin/boy/second_category')) class="nav-item active" @endif  >
                <a class="nav-link" href="
                    {{ route('boy.second') }}
                    "> الفئة الثانية</a>
            </li>
            <li @if (Request::is('admin/boy/third_category')) class="nav-item active" @endif >
                <a class="nav-link" href="
                 {{ route('boy.third') }}
                ">الفئة الثالثة</a>
            </li>
            <li @if (Request::is('admin/boy/forth_category')) class="nav-item active" @endif >
                <a class="nav-link" href="
                    {{ route('boy.forth') }}

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
