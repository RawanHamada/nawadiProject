@extends('layouts.show_info')
@section('title', 'بيانات الذكور')
@section('page_header', 'بيانات المسجلين من الذكور')

@section('nav')
    {{--  start nav --}}

    <!-- mini nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li @if (Request::is('home'))  @endif class="nav-item ">
                    <a class="nav-link" href="{{ route('home') }}">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li @if (Request::is('boy/option_register'))  @endif class="nav-item ">
                    <a class="nav-link" href="
                    {{-- {{route('boy.option')}} --}}
                    {{-- {{ route('register',['type' => 'boy']) }} --}}
                    ">فئة البراعم </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="
                    {{-- {{ route('girl.create') }} --}}
                    "> فئة الأشبال</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">فئة الفتيان</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#"> فئة الشباب</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"> المسجلين من الذكور</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">  المسجلين من الاناث</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="
                    {{-- {{ route('login') }} --}}
                    ">تسجيل خروج</a>
                </li>
            </ul>
        </div>
    </nav>


    {{-- end nav --}}
@endsection

@section('content')

    <tbody>
        {{-- @foreach ($boys as $boy) --}}
            <tr>
                <td scope="row">اااا</td>
                <td class="data" class="data">ااااا</td>
                <td class="data" class="data"></td>
                <td class="data" class="data">
                <td class="data" class="data">
                    <form action="#"
                        method="post">
                        @csrf
                        <button class="show">عرض</button>
                    </form>
                </td>

            </tr>
        {{-- @endforeach --}}
    </tbody>
@endsection
