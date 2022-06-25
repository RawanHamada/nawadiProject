@extends('layouts.boy_register')
@section('page_header', 'تسجيل البنين')
@section('btn', 'التالي')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form id="form" class="form" action="
    {{ route('store') }}
    {{-- {{ route('register') }} --}}
    " method="POST">
        <div class="age">
            <label for="text">المدينة</label>
            <select name="city_name" class="form-control">
                <option selected>اختر</option>
                <option>الرياض</option>
            </select>
        </div>
        <div class="age">
            <label for="text">الاندية المتاحة</label>
            <select name="club_name" class="form-control">
                <option selected>اختر</option>
                <option>مدارس الصدارة</option>
            </select>
        </div>

    @endsection
