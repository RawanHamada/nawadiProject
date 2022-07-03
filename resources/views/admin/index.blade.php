<x-head-home />

<body>
    <x-nav />
    <!-- start second navbar -->
    <nav id="sec-nav" class="navbar navbar-light  justify-content-between">
        <a class="navbar-brand">
            <img src="{{ asset('assets/img/logo.png') }}" alt="nawadi">
        </a>
        <section class="nav-left">
            <section class="nav-img">
                <a class="navbar-brand">
                    <img src="{{ asset('assets/img/sec-logo-new.png') }}" alt="">
                </a>
            </section>
            <section class="sec-social">
                <h4>تابعونا ...</h4>
                <section class="nav-icons">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/"><i id="face"
                                    class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/"><i id="twitter" class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </section>
            </section>

        </section>
    </nav>
    <!-- end navbar-->

    <!-- sec -->
    <section class="sec-one">
        <p class="p-one">نوادي ... الوقت المفيد .. وأكثر</p>
        <div class="sec-one-btn">
            <a id="btn-boy"  href="#
            {{-- {{route('admin.boy.details')}} --}}

            ">تفاصيل الذكور</a>
            <a id="btn-girl" href="
            {{-- {{ route('girl.create') }} --}}

            #
            ">تفاصيل البنات</a>

        </div>
    </section>

    <!-- end sec -->
    <script src="https://kit.fontawesome.com/5427831588.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>


</body>

</html>
