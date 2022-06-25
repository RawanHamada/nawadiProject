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
    <x-nav />
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">
                    @yield('page_header')
                </h4>
                <h4 class="sub-header">
                    @yield('sub_header')
                </h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">الرقم</th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">السجل المدني</th>
                                    <th scope="col">رقم جوال ولي الأمر</th>
                                    <th scope="col">الصف المنتقل له</th>
                                    <th scope="col">المدرسة الحالية</th>
                                    <th scope="col">الحي</th>
                                    <th scope="col">الفئة العمرية</th>
                                    <th scope="col">الرغبة في النقل</th>
                                    <th scope="col">صورة الطالب</th>
                                </tr>
                            </thead>

                            @yield('content')

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
