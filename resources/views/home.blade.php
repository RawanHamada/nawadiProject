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

    <!-- sec-one -->
    <section class="sec-one">
        <p class="p-one">نوادي ... الوقت المفيد .. وأكثر</p>
        <div class="sec-one-btn">
            <a id="btn-btn1" href="{{route('boy.option' ,['type' => 'boy'])}}
            {{-- {{ route('register',['type' => 'boy']) }} --}}
            ">تسجيل البنين</a>
            <a id="btn-btn2" href=" {{ route('girl.option' ,['type' => 'girl']) }}
            {{-- {{ route('girl.create') }} --}}
            ">تسجيل البنات</a>
            {{-- <button >تسجيل البنين</button> --}}
            {{-- <button id="btn-btn2">تسجيل البنات</button> --}}
        </div>
        {{-- <div class="sec-one-btn">
            <a id="a-1" href="{{ route('option') }}" onmouseover="hover1()">
                <img src="{{ asset('assets/img/lotsOfmg.jpg') }}" alt="">
                <h4>تسجيل البنين</h4>
            </a>
            <button id="btn-btn1" onmouseout="hoverout1()">تسجيل البنين</button> --}}

        {{-- <form action="{{ route('option') }}">
                <button id="btn-btn1" onmouseout="hoverout1()">تسجيل البنين</button>
            </form> --}}
        {{-- <a id="a-2" href="" onmouseover="hover2()">
                <img src="{{ asset('assets/img/lotsOfmg.jpg') }}" alt="">
                <h4>تسجيل البنات</h4>
            </a>
            <button id="btn-btn2" onmouseout="hoverout2()">تسجيل البنات</button>
        </div> --}}
        <div class="sec-one-btn">
            <a id="btn-btn3" href="">التوظيف</a>
            <a id="btn-btn4" href="">اتصل بنا</a>
            {{-- <button id="btn-btn3" >التوظيف</button>

            <button id="btn-btn4">اتصل بنا</button> --}}
        </div>
    </section>
    <!-- end sec-one -->
    <script src="https://kit.fontawesome.com/5427831588.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
    {{-- <script>
        function hover1() {
            document.getElementById("a-1").style.display = "none";
            document.getElementById("btn-btn1").style.display = "inline";
            document.getElementById("btn-btn1").style.backgroundColor = " #258131";
            document.getElementById("btn-btn1").style.marginLeft = " 70px";

        }
        function hoverout1() {
            document.getElementById("btn-btn1").style.display = "none";
            document.getElementById("a-1").style.display = "inline";

        }
        function hover2() {
            document.getElementById("a-2").style.display = "none";
            document.getElementById("btn-btn2").style.display = "inline";
            document.getElementById("btn-btn2").style.backgroundColor = " #258131";
            document.getElementById("btn-btn2").style.marginLeft = " 66px";
            document.getElementById("btn-btn2").style.padding = "50px 40px";


        }
        function hoverout2() {
            document.getElementById("btn-btn2").style.display = "none";
            document.getElementById("a-2").style.display = "inline";

        }

    </script> --}}


</body>

</html>
