@extends('layouts.info_category')
@section('title', 'بيانات الذكور')
@section('page_header', 'بيانات المسجلين من الذكور')
@section('sub_header', 'من الأول حتى الثالث')

@section('nav')
    {{-- start nav --}}

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
                <li @if (Request::is('boy/option_register'))  @endif class="nav-item active">
                    <a class="nav-link"
                        href="
                    {{-- {{route('boy.option')}} --}}
                    {{-- {{ route('register',['type' => 'boy']) }} --}}
                    ">الفئة
                        الاولى </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="
                    {{-- {{ route('girl.create') }} --}}
                    "> الفئة
                        الثانية</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">الفئة الثالثة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> الفئة الرابعة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> المسجلين من الذكور</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> المسجلين من الاناث</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="
                    {{-- {{ route('login') }} --}}
                    ">تسجيل
                        خروج</a>
                </li>
            </ul>
        </div>
    </nav>


    {{-- end nav --}}
@endsection

@section('content')
    @foreach ($boys as $boy)
        <tbody>
            {{-- @foreach ($boy->age as $age) --}}
                <tr>
                    <td scope="row">{{ $boy->id }}</td>
                    <td class="data" class="data">{{ $boy->name }}</td>
                    <td class="data" class="data"></td>
                    <td class="data" class="data">

                    </td>
                    <td class="data" class="data"></td>
                    <td class="data" class="data"></td>
                    <td class="data" class="data"></td>
                    <td class="data" class="data"></td>
                    {{-- <td class="data" class="data">نعم</td>
        <td class="data" class="data">
            صورة
        </td> --}}

                </tr>
            {{-- @endforeach --}}
        </tbody>
    @endforeach
    @endsection
